<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgricultureScore extends Model
{
    protected $fillable = [
        'agriculture_id',
        'score',
        'description'
    ];

    public function agriculture() {
        return $this->belongsTo(Agriculture::class);
    }
}
