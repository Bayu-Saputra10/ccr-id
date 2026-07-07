<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanceScore extends Model
{
    protected $fillable = [
        'infrastructure_id',
        'score',
        'description'
    ];

    public function finance() {
        return $this->belongsTo(Finance::class);
    }
}
