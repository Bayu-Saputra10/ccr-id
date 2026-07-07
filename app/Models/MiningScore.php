<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MiningScore extends Model
{
    protected $fillable = [
        'infrastructure_id',
        'score',
        'description'
    ];

    public function mining() {
        return $this->belongsTo(Mining::class);
    }
}
