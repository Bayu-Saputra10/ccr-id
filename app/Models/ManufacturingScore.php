<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManufacturingScore extends Model
{
    protected $fillable = [
        'manufacturing_id',
        'score',
        'description'
    ];

    public function manufacturing() {
        return $this->belongsTo(Manufacturing::class);
    }
}
