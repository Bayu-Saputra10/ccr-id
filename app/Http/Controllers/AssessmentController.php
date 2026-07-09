<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Infrastructure;
use App\Models\Manufacturing;
use App\Models\Agriculture;
use App\Models\Finance;
use App\Models\Mining;
use App\Models\AssessmentAnswer;
use App\Models\InterpretationResult;
use App\Services\CCRAMCalculatorService;
use App\Models\ManagementRecommendation;

class AssessmentController extends Controller
{
    public function index () {
        $assessments = Assessment::orderBy('created_at', 'desc')->get();

        return view('assessments.index', compact('assessments'));
    }

    public function create() {
        return view('assessments.create');
    }

    public function store(Request $request) {
        $request->validate([
            'sector' => 'required',
            'company_name' => 'required',
            'subsector' => 'required',
            'address' => 'required',
            'assessment_date' => 'required',
            'entry_operator' => 'required',
            'data_source' => 'required|array|min:1',
            'data_source.*' => 'string'
        ]);

        session([
            'assessment_data' => [
            'sector' => $request->sector,
            'company_name' => $request->company_name,
            'subsector' => $request->subsector,
            'address' => $request->address,
            'assessment_date' => $request->assessment_date,
            'entry_operator' => $request->entry_operator,
            'data_source' => implode(', ', $request->data_source),
            'notes' => $request->notes
            ]
        ]);

        // pilihan sektor
        return redirect()->route(
            strtolower($request->sector). '.input'
        );
    }

    public function saveInfrastructure(Request $request, Assessment $assessment) {
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

        $assessment->update([
            'score_a' => $result['score_a'],
            'score_b' => $result['score_b'],
            'score_c' => $result['score_c'],
            'score_d' => $result['score_d'],
            'score_e' => $result['score_e'],
            'total_score' => $result['total_score'],

            'grade' => $result['grade'],
            'category' => $result['category'],
            'interpretation_grade' => $result['interpretation_grade'],

            'interpretation' => $result['interpretation'],

            'strongest_dimension' => $result['strongest_dimension'],
            'weakest_dimension' => $result['weakest_dimension'],
            'next_grade' => $result['next_grade'],
            'gap_to_next_grade' => $result['gap_to_next_grade'],
            'improvement_priority' => $result['improvement_priority'],

            'management_recommendation' => $result['management_recommendation'],
        ]);

        return redirect()->route('assessments.report', $assessment->id);
    }

    public function report(Assessment $assessment) {
        $answers = AssessmentAnswer::where('assessment_id', $assessment->id)->get();

        $sector = ucfirst(strtolower($assessment->sector));

        $indicatorModel = "App\\Models\\{$sector}";

        $averages = [];

        foreach (['A','B','C','D','E'] as $dimension) {
            $scores = [];

            foreach ($answers as $answer) {
                $indicator = $indicatorModel::find($answer->indicator_id);

                if ($indicator && $indicator->dimension == $dimension) {
                    $scores[] = $answer->score;
                }
            }

            $averages[$dimension] = count($scores) ? round(array_sum($scores) / count($scores), 2) : 0;
        }

        $result = app(CCRAMCalculatorService::class)->calculate($assessment);

        $dimensionPerformance = $result['dimension_performance'];

        $sector = ucfirst(strtolower($assessment->sector));

        $indicatorModel = "App\\Models\\{$sector}";
        $scoreModel = "App\\Models\\{$sector}Score";
        $evidenceModel = "App\\Models\\{$sector}Evidence";

        $foreignKey = strtolower($assessment->sector) . '_id';

        foreach ($answers as $answer) {
            $answer->indicator = $indicatorModel::find($answer->indicator_id);

            $answer->score_description = $scoreModel::where($foreignKey, $answer->indicator_id)->where('score', $answer->score)->value('description');

            $answer->evidence_description = $evidenceModel::where($foreignKey, $answer->indicator_id)->where('value', $answer->evidence)->value('description');
        }

        return view('assessments.show', compact('assessment', 'answers', 'averages', 'dimensionPerformance'));
    }
}