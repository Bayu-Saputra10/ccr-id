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
        'description_id',
    'description_en',
    ];

    public function getDescriptionAttribute()
{
    return app()->getLocale() === 'en'
        ? ($this->description_en ?: $this->description_id)
        : $this->description_id;
}
}
