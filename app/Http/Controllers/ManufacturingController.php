<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Manufacturing;
use App\Models\AssessmentAnswer;
use App\Services\CCRAMCalculatorService;

class ManufacturingController extends Controller
{
    public function index(Assessment $assessment)
    {
        $indicators = Manufacturing::with(['scores', 'evidences'])->orderBy('dimension')->orderBy('indicator_id')->get();

        return view('manufacturing.input', compact('assessment', 'indicators'));
    }
    public function save(Request $request, Assessment $assessment)
    {
        AssessmentAnswer::where('assessment_id', $assessment->id)->delete();

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

        return redirect()->route('assessments.report', $assessment->id);
    }
}
