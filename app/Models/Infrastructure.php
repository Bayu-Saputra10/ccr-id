<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infrastructure extends Model
{
    protected $fillable = [
        'dimension',
        'indicator_id',
        'indicator_name',
        'definition'
    ];

    public function scores()
    {
        return $this->hasMany(
            InfrastructureScore::class
        );
    }

    public function evidences()
    {
        return $this->hasMany(
            InfrastructureEvidence::class
        );
    }
}
