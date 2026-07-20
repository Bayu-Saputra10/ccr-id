<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Assessment;
use App\Models\Manufacturing;
use App\Models\AssessmentAnswer;
use App\Services\CCRAMCalculatorService;

class ManufacturingController extends Controller
{
    private function authorizeAssessment(Assessment $assessment) {
        if (auth()->user()->role != 'admin' && $assessment->user_id != auth()->id()) {
            abort(403, 'Anda tidak memiliki akses');
        }
    }

    public function index(Assessment $assessment){
        $this->authorizeAssessment($assessment);

        $indicators = Manufacturing::with(['scores', 'evidences'])->orderBy('dimension')->orderBy('indicator_id')->get();

        $answers = AssessmentAnswer::where(
            'assessment_id', $assessment->id
        )->get()->keyBy('indicator_id');

        foreach ($indicators as $indicator){
            $indicator->answer = $answers[$indicator->id] ?? null;
        }

        return view('manufacturing.input', compact('assessment', 'indicators'));
    }

    public function save(Request $request, Assessment $assessment) {
        $this->authorizeAssessment($assessment);

        $request->validate([
            'evidence_file.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ],[
            'evidence_file.*.max' => 'Ukuran file maksimal 2 MB.',
            'evidence_file.*.mimes' => 'Format file harus PDF, JPG, JPEG atau PNG.',
        ]);
        $action = $request->input('action', 'submit');
        
        $indicators = Manufacturing::orderBy('indicator_id')->get();

        if ($action == 'submit') {
            $errors = [];
            foreach ($indicators as $indicator) {
                if (!isset($request->score[$indicator->id]) || $request->score[$indicator->id] === '') {
                    $errors[] = $indicator->indicator_id . ' - ' . $indicator->indicator_name . ' (Score belum diisi)';
                }
                if (!isset($request->evidence[$indicator->id]) || $request->evidence[$indicator->id] === '') {
                    $errors[] = $indicator->indicator_id . ' - ' . $indicator->indicator_name . ' (Sumber Bukti belum diisi)';
                }
            }
            if (count($errors)>0) {
                return back()->withInput()->with('validationErrors',$errors);
            }
        }

        $oldAnswers = AssessmentAnswer::where('assessment_id',$assessment->id)->get()->keyBy('indicator_id');
        
        AssessmentAnswer::where('assessment_id',$assessment->id)->delete();

        foreach ($request->score as $indicatorId => $score) {
            $oldAnswer = $oldAnswers[$indicatorId] ?? null;
            $filePath = $oldAnswer?->evidence_file; 

            if ($request->hasFile("evidence_file.$indicatorId")) {
                if ($oldAnswer && $oldAnswer->evidence_file && Storage::disk('public')->exists($oldAnswer->evidence_file)) {
                    Storage::disk('public')->delete($oldAnswer->evidence_file);
                }
                $uploadedFile = $request->file("evidence_file.$indicatorId");

                $fileName = $indicatorId.'_'.time().'_'.preg_replace('/[^A-Za-z0-9._-]/','_',$uploadedFile->getClientOriginalName());

                $filePath = $uploadedFile->storeAs('evidence',$fileName,'public');
            }

            AssessmentAnswer::updateOrCreate([
                'assessment_id' => $assessment->id,
                'indicator_id' => $indicatorId,
            ],[
                'score' => $score,
                'evidence' => $request->evidence[$indicatorId] ?? null,
                'evidence_file' => $filePath,
                'note' => $request->note[$indicatorId] ?? null,
            ]);
        }

        if ($action == 'draft') {
            $assessment->status='draft';
            $assessment->save();
            return redirect()->route('assessments.index')->with('success', 'Draft berhasil disimpan.');
        }

        $result = app(CCRAMCalculatorService::class)->calculate($assessment);

        $assessment->update($result);

        $assessment->status = 'completed';
        $assessment->save();

        return redirect()->route('assessments.report', $assessment->id);
    }
}