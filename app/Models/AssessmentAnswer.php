<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssessmentAnswer extends Model
{
    protected $fillable = [
        'assessment_id',
        'indicator_id',
        'score',
        'evidence',
        'evidence_file',
        'note'
    ];

    public function assessment() {
        return $this->belongsTo(Assessment::class);
    }
}