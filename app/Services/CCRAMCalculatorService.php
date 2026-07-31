<?php

namespace App\Services;

use App\Models\Assessment;
use App\Models\AssessmentAnswer;
use App\Models\Infrastructure;
use App\Models\Manufacturing;
use App\Models\Agriculture;
use App\Models\Finance;
use App\Models\Mining;
use App\Models\InterpretationResult;
use App\Models\ManagementRecommendation;
use App\Models\DimensionInterpretation;
use App\Models\GradeInterpretation;

class CCRAMCalculatorService

{
    private array $weights =[
        'A' => 20,
        'B' => 25,
        'C' => 20,
        'D' => 25,
        'E' => 10
    ];

    private function getGrade(float $score): array
{
    if ($score >= 91) {
        $grade = 'AAA';
    } elseif ($score >= 81) {
        $grade = 'AA';
    } elseif ($score >= 71) {
        $grade = 'A';
    } elseif ($score >= 61) {
        $grade = 'BBB';
    } elseif ($score >= 51) {
        $grade = 'BB';
    } elseif ($score >= 41) {
        $grade = 'B';
    } elseif ($score >= 31) {
        $grade = 'CCC';
    } elseif ($score >= 21) {
        $grade = 'CC';
    } else {
        $grade = 'C';
    }

    $result = GradeInterpretation::where('grade', $grade)->first();

    return [

        'grade' => $result->grade,

        'category' => $result->category,

        'interpretation_grade' => $result->interpretation,

    ];
}

    private function getGapToNextGrade(float $score): array
    {
        if($score >= 91) {
            return ['next_grade' => '-', 'gap' => 0];
        }
        if ($score >= 81) {
            return ['next_grade' => 'AAA', 'gap' => round(91 - $score,2)];
        }
        if ($score >= 71) {
            return ['next_grade' => 'AA', 'gap' => round(81 - $score,2)];
        }
        if ($score >= 61) {
            return ['next_grade' => 'A', 'gap' => round(71 - $score,2)];
        }
        if ($score >= 51) {
            return ['next_grade' => 'BBB', 'gap' => round(61 - $score,2)];
        }
        if ($score >= 41) {
            return ['next_grade' => 'BB', 'gap' => round(51 - $score,2)];
        }
        if ($score >= 31) {
            return ['next_grade' => 'B', 'gap' => round(41 - $score,2)];
        }
        if ($score >= 21) {
            return ['next_grade' => 'CCC', 'gap' => round(31 - $score,2)];
        }
        return ['next_grade' => 'CC', 'gap' => round(21 - $score,2)];
    }

    public function calculate(Assessment $assessment) {
        $answers = AssessmentAnswer::where('assessment_id', $assessment->id)->get();

        $result = [];

        foreach ($this->weights as $dimension => $weight) {
            $scores = [];

            foreach ($answers as $answer) {
                $sector = ucfirst(strtolower($assessment->sector));
                $indicatorModel = "App\\Models\\{$sector}";
                $indicator = $indicatorModel::find($answer->indicator_id);
                if ($indicator && $indicator->dimension == $dimension) {
                    $scores[] = $answer->score;
                }
            }

            $average = count($scores) ? (array_sum($scores) / count($scores)) : 0;
            $dimensionAverage[$dimension] = round($average,4);
            $weighted = ($average / 5) * $weight;
            $result[$dimension] = round($weighted, 2);
        }

        $total = array_sum($result);

        $highestScore = !empty($result) ? max($result) : 0;
        $lowestScore = !empty($result) ? min($result) : 0;

        $strongestDimension = array_search($highestScore, $result);

        $weakestDimension = array_search($lowestScore, $result);

        $weakestAverage = $dimensionAverage[$weakestDimension];

        $gapInfo = $this->getGapToNextGrade(round($total,2));

        $rating = $this->getGrade(round($total, 2));

        // sector interpretation
        $interpretation = InterpretationResult::where('sector', ucfirst(strtolower($assessment->sector)))->where('category', $rating['category'])->first();

        $dimensionNames = [
    'A' => [
        'id' => 'Tata Kelola & Kepemimpinan Iklim',
        'en' => 'Climate Governance & Leadership',
    ],

    'B' => [
        'id' => 'Strategi & Resiliensi Model Bisnis',
        'en' => 'Strategy & Business Model Resilience',
    ],

    'C' => [
        'id' => 'Manajemen Risiko Iklim Terintegrasi',
        'en' => 'Integrated Climate Risk Management',
    ],

    'D' => [
        'id' => 'Kinerja & Target Terukur',
        'en' => 'Performance & Measurable Targets',
    ],

    'E' => [
        'id' => 'Resiliensi Sosial & Rantai Nilai',
        'en' => 'Social Resilience & Value Chain',
    ],
];

        $dimensionPerformance = [];

        foreach ($dimensionAverage as $dimension => $avgScore) {
            $dimensionInterpretation = DimensionInterpretation::where('dimension', $dimension)->where('score_min', '<=', $avgScore)->where('score_max', '>=', $avgScore)->first();

            $dimensionPerformance[] = [
                'dimension' => $dimension,
                'dimension_name' => app()->getLocale() === 'en'
    ? $dimensionNames[$dimension]['en']
    : $dimensionNames[$dimension]['id'],
                'avg_score' => round($avgScore,2),
                'weighted_score' => $result[$dimension],
                'category' => $dimensionInterpretation?->category,
                'automatic_interpretation' => $dimensionInterpretation?->automatic_interpretation,
                'short_recommendation' => $dimensionInterpretation?->short_recommendation,
            ];
        }

        $dimensionName = app()->getLocale() === 'en'
    ? ($dimensionNames[$weakestDimension]['en'] ?? '-')
    : ($dimensionNames[$weakestDimension]['id'] ?? '-');

        $priority = app()->getLocale() === 'en'
    ? 'High priority: strengthen Dimension '
        . $weakestDimension
        . ' ('
        . $dimensionName
        . ')'
    : 'Prioritas tinggi: perkuat Dimensi '
        . $weakestDimension
        . ' ('
        . $dimensionName
        . ')';

         $recommendation = ManagementRecommendation::where('dimension', $weakestDimension)->where('score_min', '<=', $weakestAverage)->where('score_max', '>=', $weakestAverage)->first();

        return [
            'score_a' => $result['A'],
            'score_b' => $result['B'],
            'score_c' => $result['C'],
            'score_d' => $result['D'],
            'score_e' => $result['E'],
            'total_score' => round($total, 2),

            'grade' => $rating['grade'],
            'category' => $rating['category'],
            'interpretation_grade' => $rating['interpretation_grade'],
            'interpretation' => $interpretation ? $interpretation->description : null,
            'strongest_dimension' => $strongestDimension,
            'weakest_dimension' => $weakestDimension,
            'next_grade' => $gapInfo['next_grade'],
            'gap_to_next_grade' => $gapInfo['gap'],
            'improvement_priority' => $priority,
            'management_recommendation' => $recommendation ? $recommendation->management_recommendation : null,
            'dimension_performance' => $dimensionPerformance
        ];
    }

    public function buildReportData(Assessment $assessment): array {
        $answers = AssessmentAnswer::where('assessment_id', $assessment->id)->get();

        $weights = [
            'A' => 20,
            'B' => 25,
            'C' => 20,
            'D' => 25,
            'E' => 10
        ];

        $dimensionNames = [
    'A' => [
        'id' => 'Tata Kelola & Kepemimpinan Iklim',
        'en' => 'Climate Governance & Leadership',
    ],

    'B' => [
        'id' => 'Strategi & Resiliensi Model Bisnis',
        'en' => 'Strategy & Business Model Resilience',
    ],

    'C' => [
        'id' => 'Manajemen Risiko Iklim Terintegrasi',
        'en' => 'Integrated Climate Risk Management',
    ],

    'D' => [
        'id' => 'Kinerja & Target Terukur',
        'en' => 'Performance & Measurable Targets',
    ],

    'E' => [
        'id' => 'Resiliensi Sosial & Rantai Nilai',
        'en' => 'Social Resilience & Value Chain',
    ],
];

        $averages = [];

        $dimensionPerformance = [];

        $sector = ucfirst(strtolower($assessment->sector));

        $indicatorModel = "App\\Models\\{$sector}";
        $scoreModel = "App\\Models\\{$sector}Score";
        $evidenceModel = "App\\Models\\{$sector}Evidence";
        
        $foreignKey = strtolower($assessment->sector) . '_id';


        foreach ($weights as $dimension => $weight) {
            $scores = [];
            foreach ($answers as $answer) {
                $indicator = $indicatorModel::find($answer->indicator_id);
                if ($indicator && $indicator->dimension == $dimension) {
                    $scores[] = $answer->score;
                }
            }

            $average = count($scores) ? round(array_sum($scores) / count($scores),2): 0;

            $averages[$dimension] = $average;

            $weighted = round(($average/5) * $weight,2);

            $dimensionInterpretation = DimensionInterpretation::where('dimension', $dimension)->where('score_min','<=',$average)->where('score_max','>=',$average)->first();

            $dimensionPerformance[] = [
                'dimension' => $dimension,
                'dimension_name' => app()->getLocale() === 'en'
    ? $dimensionNames[$dimension]['en']
    : $dimensionNames[$dimension]['id'],
                'avg_score' => $average,
                'weighted_score' => $weighted,
                'category' => $dimensionInterpretation?->category,
                'automatic_interpretation' => $dimensionInterpretation?->automatic_interpretation,
                'short_recommendation' => $dimensionInterpretation?->short_recommendation,
            ];
        }

        foreach ($answers as $answer) {

    $answer->indicator = $indicatorModel::find($answer->indicator_id);

    $score = $scoreModel::where($foreignKey, $answer->indicator_id)
        ->where('score', $answer->score)
        ->first();

    $evidence = $evidenceModel::where($foreignKey, $answer->indicator_id)
        ->where('value', $answer->evidence)
        ->first();

    $answer->score_description = $score?->description;

    $answer->evidence_description = $evidence?->description;
}

        return [
            'assessment' => $assessment,
            'answers' => $answers,
            'averages' => $averages,
            'dimensionPerformance' => $dimensionPerformance,
            'radarLabel' => ['A','B','C','D','E'],
            'radarData' => [
                $averages['A'],
                $averages['B'],
                $averages['C'],
                $averages['D'],
                $averages['E'],
            ],
            'barLabel' => ['A','B','C','D','E'],
            'barData' => [
                $averages['A'],
                $averages['B'],
                $averages['C'],
                $averages['D'],
                $averages['E'],
            ]
        ];
    }
}