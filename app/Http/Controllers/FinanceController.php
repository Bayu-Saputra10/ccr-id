<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\AssessmentAnswer;
use App\Services\CCRAMCalculatorService;

class FinanceController extends Controller
{
    public function index() {
        $assessment = session('assessment_data');
        $assessment = (object) $assessment;
        if (!$assessment) {
            return redirect()->route('assessments.create');
        }

        $indicators = Finance::with(['scores', 'evidences'])->orderBy('dimension')->orderBy('indicator_id')->get();

        return view('finance.input', compact('assessment', 'indicators'));
    }
    public function save(Request $request) {
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
