<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanceScore extends Model
{
    protected $fillable = [
        'infrastructure_id',
        'score',
        'description_id',
        'description_en',
    ];

    public function finance() {
        return $this->belongsTo(Finance::class);
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        
        return app()->getLocale() == 'en' ? ($this->description_en ?: $this->description_id) : $this->description_id;
    }
}
