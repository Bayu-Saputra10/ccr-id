<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanceEvidence extends Model
{
    protected $table = 'finance_evidences';

    protected $fillable = [
        'finance_id',
        'value',
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
