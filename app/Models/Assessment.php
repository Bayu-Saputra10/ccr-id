<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'sector',
        'company_name',
        'subsector',
        'address',
        'assessment_date',
        'entry_operator',
        'data_source',
        'notes',
        'logo',

        'score_a',
        'score_b',
        'score_c',
        'score_d',
        'score_e',
        'total_score',

        'grade',
        'category',
        'interpretation_grade',

        'interpretation',

        'strongest_dimension',
        'weakest_dimension',
        'next_grade',
        'gap_to_next_grade',
        'improvement_priority',

        'recommendation_dimension',
        'recommendation_category',
        'management_recommendation',
        'action_focus',

        'management_recommendation',
    ];

    public function details() {
        return $this->hasMany(
            AssessmentDetail::class, 'assessment_id'
        );
    }

    public function getSectorNameAttribute() {
        return match ($this->sector) {
            'infrastructure' => 'Infrastruktur',
            'manufacturing' => 'Manufaktur',
            'agriculture' => 'Agrikultur',
            'finance' => 'Keuangan',
            'mining' => 'Energi & Pertambangan',
            default => $this->sector,
        };
    }

}
