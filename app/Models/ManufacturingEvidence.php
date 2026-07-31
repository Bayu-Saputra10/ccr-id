<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManufacturingEvidence extends Model
{
    
    protected $table = 'manufacturing_evidences';

    protected $fillable = [
        'manufacturing_id',
        'value',
        'description_id',
        'description_en',
    ];

    public function manufacturing() {
        return $this->belongsTo
        (Manufacturing::class);
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        
        return app()->getLocale() == 'en' ? ($this->description_en ?: $this->description_id) : $this->description_id;
    }
}