<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Enums\UserRolesEnum;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => UserRolesEnum::class,
    ];
    
    public function captures()
    {
        return $this->hasMany(Capture::class);
    }

    public function fishingSpots()
    {
        return $this->hasMany(FishingSpot::class, 'created_by');
    }
}
