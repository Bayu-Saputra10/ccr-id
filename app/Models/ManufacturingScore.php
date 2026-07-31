<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManufacturingScore extends Model
{
    protected $fillable = [
        'manufacturing_id',
        'score',
        'description_id',
        'description_en',
    ];

    public function manufacturing() {
        return $this->belongsTo(Manufacturing::class);
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        
        return app()->getLocale() == 'en' ? ($this->description_en ?: $this->description_id) : $this->description_id;
    }
}
