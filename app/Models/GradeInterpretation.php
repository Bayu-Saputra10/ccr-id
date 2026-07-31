<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradeInterpretation extends Model
{
    protected $fillable = [

        'grade',
        'category',

        'interpretation_id',
        'interpretation_en',
    ];

    public function getInterpretationAttribute()
    {
        return app()->getLocale() === 'en'
            ? ($this->interpretation_en ?: $this->interpretation_id)
            : $this->interpretation_id;
    }
}
