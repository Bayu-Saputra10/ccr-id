<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfrastructureScore extends Model
{
    protected $fillable = [
        'infrastructure_id',
        'score',
        'description_id',
        'description_en',
    ];

    public function infrastructure() {
        return $this->belongsTo(
            Infrastructure::class
        );
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        
        return app()->getLocale() == 'en' ? ($this->description_en ?: $this->description_id) : $this->description_id;
    }
}
