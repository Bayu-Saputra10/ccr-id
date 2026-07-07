<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MiningEvidence extends Model
{
    protected $table = 'mining_evidences';

    protected $fillable = [
        'mining_id',
        'value',
        'description'
    ];

    public function mining() {
        return $this->belongsTo(Mining::class);
    }
}
