<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgricultureScore extends Model
{
    protected $fillable = [
        'agriculture_id',
        'score',
        'description_id',
        'description_en',
    ];

    public function agriculture() {
        return $this->belongsTo(Agriculture::class);
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        
        return app()->getLocale() == 'en' ? ($this->description_en ?: $this->description_id) : $this->description_id;
    }
}
