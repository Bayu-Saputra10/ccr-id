<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfrastructureScore extends Model
{
    protected $fillable = [
        'infrastructure_id',
        'score',
        'description'
    ];

    public function infrastructure() {
        return $this->belongsTo(
            Infrastructure::class
        );
    }
}
