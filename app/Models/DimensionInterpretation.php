<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimensionInterpretation extends Model
{
    protected $fillable = [
        'key',
        'dimension',
        'dimension_name',
        'category_id',
        'category_en',
        'score_min',
        'score_max',
        'automatic_interpretation_id',
        'automatic_interpretation_en',

        'short_recommendation_id',
        'short_recommendation_en',
    ];

    public function getCategoryAttribute()
    {
        return app()->getLocale() === 'en'
            ? ($this->category_en ?: $this->category_id)
            : $this->category_id;
    }

    public function getAutomaticInterpretationAttribute()
    {
        return app()->getLocale() === 'en'
            ? ($this->automatic_interpretation_en ?: $this->automatic_interpretation_id)
            : $this->automatic_interpretation_id;
    }

    public function getShortRecommendationAttribute()
    {
        return app()->getLocale() === 'en'
            ? ($this->short_recommendation_en ?: $this->short_recommendation_id)
            : $this->short_recommendation_id;
    }
}
