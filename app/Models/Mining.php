<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mining extends Model
{
    protected $fillable = [
        'dimension',
        'indicator_id',
        'indicator_name',
        'definition'
    ];

    public function scores() {
        return $this->hasMany(MiningScore::class);
    }

    public function evidences() {
        return $this->hasMany(MiningEvidence::class);
    }
}
