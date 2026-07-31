<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subsector;

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

    public function getSectorNameAttribute()
{
    return match ($this->sector) {

        'infrastructure' => app()->getLocale() === 'en'
            ? 'Infrastructure'
            : 'Infrastruktur',

        'manufacturing' => app()->getLocale() === 'en'
            ? 'Manufacturing'
            : 'Manufaktur',

        'agriculture' => app()->getLocale() === 'en'
            ? 'Agriculture'
            : 'Agrikultur',

        'finance' => app()->getLocale() === 'en'
            ? 'Finance'
            : 'Keuangan',

        'mining' => app()->getLocale() === 'en'
            ? 'Energy & Mining'
            : 'Energi & Pertambangan',

        default => $this->sector,
    };
}

public function getDataSourceNameAttribute()
{
    $sources = explode(', ', $this->data_source);

    $map = [
        'Laporan Keuangan' => app()->getLocale() === 'en'
            ? 'Financial Report'
            : 'Laporan Keuangan',

        'Laporan Keberlanjutan' => app()->getLocale() === 'en'
            ? 'Sustainability Report'
            : 'Laporan Keberlanjutan',

        'Dokumen Internal Lainnya' => app()->getLocale() === 'en'
            ? 'Other Internal Documents'
            : 'Dokumen Internal Lainnya',
    ];

    return collect($sources)
        ->map(fn ($item) => $map[$item] ?? $item)
        ->implode(', ');
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

    public function getSubsectorNameAttribute()
{
    $subsector = Subsector::where('sector', $this->sector)
        ->where(function ($query) {
            $query->where('name_id', $this->subsector)
                  ->orWhere('name_en', $this->subsector);
        })
        ->first();

    return $subsector
        ? $subsector->name
        : $this->subsector;
}

    public function answers() {
        return $this->hasMany(AssessmentAnswer::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}