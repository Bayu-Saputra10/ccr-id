<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfrastructureEvidence extends Model
{
    protected $table = 'infrastructure_evidences';

    protected $fillable = [
        'infrastructure_id',
        'value',
        'description'
    ];

    public function infrastructure()
    {
        return $this->belongsTo(
            Infrastructure::class
        );
    }
}
