<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subsector extends Model
{
    protected $fillable = [
        'sector',
        'name_id',
        'name_en',
    ];

    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return app()->getLocale() === 'en'
            ? ($this->name_en ?: $this->name_id)
            : $this->name_id;
    }
}
