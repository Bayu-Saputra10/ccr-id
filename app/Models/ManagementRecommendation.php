<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManagementRecommendation extends Model
{
    protected $fillable = [
        'key',
        'dimension',
        'dimension_name',
        'category',
        'score_min',
        'score_max',
        'management_recommendation_id',
        'management_recommendation_en',
        'action_focus_id',
        'action_focus_en',
    ];

    public function getManagementRecommendationAttribute()
    {
        return app()->getLocale() === 'en'
            ? ($this->management_recommendation_en ?: $this->management_recommendation_id)
            : $this->management_recommendation_id;
    }

    public function getActionFocusAttribute()
    {
        return app()->getLocale() === 'en'
            ? ($this->action_focus_en ?: $this->action_focus_id)
            : $this->action_focus_id;
    }
}