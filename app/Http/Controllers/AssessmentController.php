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
    // penulisan route
    private function getSectorConfig(string $sector): array{
        $sector = strtolower($sector);
        return match ($sector){
            'infrastructure' => [
                'controller'=>'infrastructure',
                'model'=>\App\Models\Infrastructure::class,
                'view'=>'infrastructure.input',
            ],
            'manufacturing' => [
                'controller'=>'manufacturing',
                'model'=>\App\Models\Manufacturing::class,
                'view'=>'manufacturing.input',
            ],
            'agriculture' => [
                'controller'=>'agriculture',
                'model'=>\App\Models\Agriculture::class,
                'view'=>'agriculture.input',
            ],
            'finance' => [
                'controller'=>'finance',
                'model'=>\App\Models\Finance::class,
                'view'=>'finance.input',
            ],
            'mining' => [
                'controller'=>'mining',
                'model'=>\App\Models\Mining::class,
                'view'=>'mining.input',
            ],
            default => abort(404)
        };
    }

    public function index () {
        $query = Assessment::withCount([
            'answers as answered_count' => function ($q) {
                $q->whereNotNull('score');
            }
        ]);

        if (auth()->user()->role != 'admin') {
            $query->where('user_id', auth()->id());
        }
        $assessments = $query->orderBy('created_at', 'desc')->get();

        foreach ($assessments as $assessment) {
            if ($assessment->status === 'completed') {
                $assessment->progress = 100;
                continue;
            }
            $config = $this->getSectorConfig($assessment->sector);
            $total = $config['model']::count();
            $assessment->progress = $total > 0 ? round(($assessment->answered_count / $total) * 100) : 0;
        }

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
            'data_source.*' => 'string',
            'notes' => 'nullable|string',
        ]);

        $assessment = Assessment::create([
            'user_id' => auth()->id(),

            'sector' => $request->sector,
            'company_name' => $request->company_name,
            'subsector' => $request->subsector,
            'address' => $request->address,
            'assessment_date' => $request->assessment_date,
            'entry_operator' => $request->entry_operator,
            'data_source' => implode(', ', $request->data_source),
            'notes' => $request->notes,
            'status' => 'draft'
        ]);

        $config = $this->getSectorConfig($request->sector);

        // pilihan sektor
        return redirect()->route(
            $config['controller'].'.input', $assessment->id
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

    public function edit(Assessment $assessment){
        if (auth()->user()->role != 'admin' && $assessment->user_id != auth()->id()) {
            abort(403);
        }

        $config = $this->getSectorConfig($assessment->sector);
        return view('assessments.create', [
            'assessment' => $assessment, 'edit' => true,
        ]);
    }

    public function update(Request $request, Assessment $assessment){
        if (auth()->user()->role != 'admin' && $assessment->user_id != auth()->id()) {
            abort(403);
        }

        $request->validate([
            'sector' => 'required',
            'company_name' => 'required',
            'subsector' => 'required',
            'address' => 'required',
            'assessment_date' => 'required',
            'entry_operator' => 'required',
            'data_source' => 'required|array|min:1',
            'data_source.*' => 'string',
            'notes' => 'nullable|string',
        ]);

        $assessment->update([
            'sector' => $request->sector,
            'company_name' => $request->company_name,
            'subsector' => $request->subsector,
            'address' => $request->address,
            'assessment_date' => $request->assessment_date,
            'entry_operator' => $request->entry_operator,
            'data_source' => implode(', ', $request->data_source),
            'notes' => $request->notes
        ]);
        return redirect()->route(
            strtolower($assessment->sector).'.input', $assessment->id
        );
    }

public function destroy(Assessment $assessment) {
    if (auth()->user()->role != 'admin' && $assessment->user_id != auth()->id()) {
            abort(403, 'Anda tidak memiliki akses menghapus assessment');
        }
    
    AssessmentAnswer::where('assessment_id', $assessment->id)->delete();

    $assessment->delete();

    return redirect()
        ->route('assessments.index')
        ->with('success', 'Data berhasil dihapus.');
}

    public function report(Assessment $assessment) {
        if (auth()->user()->role != 'admin' && $assessment->user_id != auth()->id()) {
            abort(403);
        }

        $answers = AssessmentAnswer::where('assessment_id', $assessment->id)->get();

        $sector = ucfirst(strtolower($assessment->sector));

        $indicatorModel = "App\\Models\\{$sector}";

        $averages = [];

        foreach (['A','B','C','D','E'] as $dimension) {
            $scores = [];

            foreach ($answers as $answer) {
                $indicator = $indicatorModel::find($answer->indicator_id);
                $answer->file_name = $answer->evidence_file ? basename($answer->evidence_file) : null;

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