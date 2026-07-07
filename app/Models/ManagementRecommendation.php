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
        'management_recommendation',
        'action_focus'
    ];
}