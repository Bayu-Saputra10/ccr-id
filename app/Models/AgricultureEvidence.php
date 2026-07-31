<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgricultureEvidence extends Model
{
    protected $table = 'agriculture_evidences';

    protected $fillable = [
        'agriculture_id',
        'value',
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
