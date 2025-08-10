<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lure extends Model
{
    protected $fillable = [
        'name', 'type', 'brand',
    ];

    public function captures()
    {
        return $this->hasMany(Capture::class);
    }
}
