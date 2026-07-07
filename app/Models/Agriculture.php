<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agriculture extends Model
{
    protected $fillable = [
        'dimension',
        'indicator_id',
        'indicator_name',
        'definition'
    ];

    public function scores() {
        return $this->hasMany(AgricultureScore::class);
    }

    public function evidences() {
        return $this->hasMany(AgricultureEvidence::class);
    }
}
