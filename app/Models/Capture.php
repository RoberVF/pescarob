<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capture extends Model
{
    protected $table = 'captures';

    protected $fillable = [
        'user_id',
        'fishing_spot_id',
        'lure_id',
        'species_id',
        'weight',
        'length',
        'caught_at',
    ];

    protected $dates = ['caught_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fishingSpot()
    {
        return $this->belongsTo(FishingSpot::class);
    }

    public function lure()
    {
        return $this->belongsTo(Lure::class);
    }

    public function species()
    {
        return $this->belongsTo(Species::class, 'species_id');
    }
}
