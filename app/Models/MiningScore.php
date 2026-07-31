<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MiningScore extends Model
{
    protected $fillable = [
        'infrastructure_id',
        'score',
        'description_id',
        'description_en',
    ];

    public function mining() {
        return $this->belongsTo(Mining::class);
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        
        return app()->getLocale() == 'en' ? ($this->description_en ?: $this->description_id) : $this->description_id;
    }
}
