<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterpretationResult extends Model
{
    protected $fillable = [
        'sector',
        'category',
        'score_min',
        'score_max',
        'description'
    ];
}
