<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'user_id',
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
        'status',
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

    public const SECTORS = [
        'Infrastructure',
        'Manufacturing',
        'Agriculture',
        'Finance',
        'Mining',
    ];
    public const SECTOR_LABELS = [
        'Infrastructure' => 'Infrastruktur',
        'Manufacturing' => 'Manufaktur',
        'Agriculture' => 'Agrikultur',
        'Finance' => 'Keuangan',
        'Mining' => 'Energi & Pertambangan',
    ];

    public function answers() {
        return $this->hasMany(AssessmentAnswer::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}