<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturing extends Model
{
    protected $fillable = [
        'dimension',
        'indicator_id',
        'indicator_name',
        'definition'
    ];

    public function scores() {
        return $this->hasMany(ManufacturingScore::class);
    }

    public function evidences() {
        return $this->hasMany(ManufacturingEvidence::class);
    }
}