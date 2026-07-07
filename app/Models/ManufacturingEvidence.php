<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManufacturingEvidence extends Model
{
    
    protected $table = 'manufacturing_evidences';

    protected $fillable = [
        'manufacturing_id',
        'value',
        'description'
    ];

    public function manufacturing() {
        return $this->belongsTo
        (Manufacturing::class);
    }
}