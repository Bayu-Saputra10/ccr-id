<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $fillable = [
        'dimension',
        'indicator_id',
        'indicator_name',
        'definition'
    ];

    public function scores() {
        return $this->hasMany(FinanceScore::class);
    }

    public function evidences() {
        return $this->hasMany(FinanceEvidence::class);
    }
}
