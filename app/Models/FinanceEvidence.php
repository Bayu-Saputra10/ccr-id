<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanceEvidence extends Model
{
    protected $table = 'finance_evidences';

    protected $fillable = [
        'finance_id',
        'value',
        'description'
    ];

    public function finance() {
        return $this->belongsTo(Finance::class);
    }
}
