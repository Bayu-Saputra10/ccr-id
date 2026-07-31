<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agriculture extends Model
{
    protected $fillable = [
        'dimension',
        'indicator_id',
        'indicator_name_id',
        'indicator_name_en',
        'definition_id',
        'definition_en',
    ];

    public function scores() {
        return $this->hasMany(AgricultureScore::class);
    }

    public function evidences() {
        return $this->hasMany(AgricultureEvidence::class);
    }

    public function getIndicatorNameAttribute()
    {
        $locale = app()->getLocale();

        return app()->getLocale() == 'en' ? ($this->indicator_name_en ?: $this->indicator_name_id) : $this->indicator_name_id;
    }

    public function getDefinitionAttribute()
    {
        $locale = app()->getLocale();

        return app()->getLocale() == 'en' ? ($this->definition_en ?: $this->definition_id) : $this->definition_id;
    }
}
