<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FishingSpot extends Model
{
    protected $fillable = [
        'name', 'description', 'latitude', 'longitude', 'created_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function captures()
    {
        return $this->hasMany(Capture::class);
    }

    public function notes()
    {
        return $this->hasMany(FishingNote::class);
    }
}
