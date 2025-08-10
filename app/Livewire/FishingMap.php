<?php

namespace App\Livewire;

use App\Models\FishingSpot;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class FishingMap extends Component
{
    public $userRole = 'demo';
    public $userName = null;
    public $fishingSpots = [];

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->userName = $user->name;
            $this->userRole = $user->role;
        }
        $this->fishingSpots = FishingSpot::all(['id', 'name', 'latitude', 'longitude'])->toArray();
    }

    public function render()
    {
        return view('livewire.fishing-map');
    }
}
