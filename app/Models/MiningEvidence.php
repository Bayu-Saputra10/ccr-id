<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MiningEvidence extends Model
{
    protected $table = 'mining_evidences';

    protected $fillable = [
        'mining_id',
        'value',
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
