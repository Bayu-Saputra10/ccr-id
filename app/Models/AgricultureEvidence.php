<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgricultureEvidence extends Model
{
    protected $table = 'agriculture_evidences';

    protected $fillable = [
        'agriculture_id',
        'value',
        'description'
    ];

    public function agriculture() {
        return $this->belongsTo(Agriculture::class);
    }
}
