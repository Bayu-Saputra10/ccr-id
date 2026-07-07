<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimensionInterpretation extends Model
{
    protected $fillable = [
        'key',
        'dimension',
        'dimension_name',
        'category',
        'score_min',
        'score_max',
        'automatic_interpretation',
        'short_recommendation'
    ];
}
