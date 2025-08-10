<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lure;

class LureSeeder extends Seeder
{
    public function run()
    {
        $types = [
            'Minnow' => ['Original', 'Flotante', 'Suspending', 'Deep Diver'],
            'Jig' => ['Slow Jig', 'Fast Jig', 'Darting', 'Vertical'],
            'Crankbait' => ['Shallow', 'Deep', 'Lipless', 'Squarebill'],
            'Soft Plastic' => ['Worm', 'Senko', 'Grub', 'Crawfish'],
            'Topwater' => ['Popper', 'Walker', 'Frog', 'Buzzbait'],
            'Bladed Jig' => ['Chatterbait', 'Buzzbait'],
            'Swimbait' => ['Hard', 'Soft', 'Topwater'],
            'Spinnerbait' => ['Single Blade', 'Double Blade', 'Colorado Blade'],
            'Spoon' => ['Casting', 'Jigging'],
        ];

        foreach ($types as $type => $variants) {
            foreach ($variants as $variant) {
                Lure::create([
                    'name' => trim("$variant $type"),
                    'type' => $type,
                    'brand' => null,
                ]);
            }
        }
    }
}
