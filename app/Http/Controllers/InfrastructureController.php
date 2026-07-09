<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Infrastructure;
use App\Models\AssessmentAnswer;
use App\Services\CCRAMCalculatorService;

class InfrastructureController extends Controller
{
    public function index() {
        $assessment = session('assessment_data');
        $assessment = (object) $assessment;
        if (!$assessment) {
            return redirect()->route('assessments.create');
        }

        $indicators = Infrastructure::with([
            'scores', 'evidences'
        ])->orderBy('dimension')->orderBy('indicator_id')->get();

        return view('infrastructure.input', compact('assessment', 'indicators'));
    }

    public function save(Request $request) {
        $indicators = Infrastructure::orderBy('indicator_id')->get();

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

        $data = session('assessment_data');
        $assessment = Assessment::create($data);

        foreach ($request->score as $indicatorId => $score) {
            AssessmentAnswer::create([
                'assessment_id' => $assessment->id,
                'indicator_id' => $indicatorId,
                'score' => $score,
                'evidence' => $request->evidence[$indicatorId],
                'note' => $request->note[$indicatorId] ?? null
            ]);
        }

        $result = app(CCRAMCalculatorService::class)->calculate($assessment);

        $assessment->update($result);

        session()->forget('assessment_data');
        return redirect()->route('assessments.report', $assessment->id);
    }
}
