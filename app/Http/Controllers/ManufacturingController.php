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
    public function index(Assessment $assessment){
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
        $request->validate([
            'evidence_file.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
        ]);

        $indicators = Manufacturing::orderBy('indicator_id')->get();

        $errors = [];

        foreach ($indicators as $indicator) {
            if (!isset($request->score[$indicator->id]) || $request->score[$indicator->id] === '') {
                $errors[] = $indicator->indicator_id . ' - ' . $indicator->indicator_name .
                ' (Score belum diisi)'; 
            }
            if (!isset($request->evidence[$indicator->id]) || $request->evidence[$indicator->id] === '') {
                $errors[] = $indicator->indicator_id . ' - ' . $indicator->indicator_name .
                ' (Sumber bukti belum diisi)'; 
            }
        }
        if (count($errors) > 0) {
            return back()->withInput()->with('validationErrors', $errors);
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

            AssessmentAnswer::create([
                'assessment_id' => $assessment->id,
                'indicator_id' => $indicatorId,
                'score' => $score,
                'evidence' => $request->evidence[$indicatorId],
                'evidence_file' => $filePath,
                'note' => $request->note[$indicatorId] ?? null
            ]);
        }

        $result = app(CCRAMCalculatorService::class)->calculate($assessment);

        $assessment->update($result);

        $assessment->status = 'completed';
        $assessment->save();

        return redirect()->route('assessments.report', $assessment->id);
    }
}