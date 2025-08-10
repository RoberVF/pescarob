<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Species;

class SpeciesSeeder extends Seeder
{
    public function run()
    {
        $species = [
            ['common_name' => 'Gallo', 'scientific_name' => 'Serranus cabrilla'],
            ['common_name' => 'Vieja Canaria', 'scientific_name' => 'Sparisoma cretense'],
            ['common_name' => 'Sargo', 'scientific_name' => 'Diplodus sargus'],
            ['common_name' => 'Boga', 'scientific_name' => 'Boops boops'],
            ['common_name' => 'Dentón', 'scientific_name' => 'Dentex dentex'],
            ['common_name' => 'Cherna', 'scientific_name' => 'Epinephelus marginatus'],
            ['common_name' => 'Palometa', 'scientific_name' => 'Trachinotus ovatus'],
            ['common_name' => 'Mero', 'scientific_name' => 'Epinephelus caninus'],
            ['common_name' => 'Pez ballesta', 'scientific_name' => 'Balistes capriscus'],
            ['common_name' => 'Raya', 'scientific_name' => 'Raja clavata'],
            ['common_name' => 'Cabracho', 'scientific_name' => 'Scorpaena scrofa'],
            ['common_name' => 'Lubina', 'scientific_name' => 'Dicentrarchus labrax'],
            ['common_name' => 'Dorada', 'scientific_name' => 'Sparus aurata'],
            ['common_name' => 'Jurel', 'scientific_name' => 'Trachurus trachurus'],
            ['common_name' => 'Anjova', 'scientific_name' => 'Pomatomus saltatrix'],
            ['common_name' => 'Mújol', 'scientific_name' => 'Mugil cephalus'],
            ['common_name' => 'Pez espada', 'scientific_name' => 'Xiphias gladius'],
            ['common_name' => 'Atún rojo', 'scientific_name' => 'Thunnus thynnus'],
            ['common_name' => 'Salema', 'scientific_name' => 'Sarpa salpa'],
            ['common_name' => 'Pez luna', 'scientific_name' => 'Mola mola'],
            ['common_name' => 'Chopa', 'scientific_name' => 'Oblada melanura'],
            ['common_name' => 'Barracuda', 'scientific_name' => 'Sphyraena sphyraena'],
            ['common_name' => 'Caballa', 'scientific_name' => 'Scomber scombrus'],
            ['common_name' => 'Cazón', 'scientific_name' => 'Scyliorhinus canicula'],
            ['common_name' => 'Merluza', 'scientific_name' => 'Merluccius merluccius'],
            ['common_name' => 'Pulpo común', 'scientific_name' => 'Octopus vulgaris'],
            ['common_name' => 'Pez loro', 'scientific_name' => 'Sparisoma cretense'],
            ['common_name' => 'Mojarra', 'scientific_name' => 'Sparisoma cretense'],
            ['common_name' => 'Robalo', 'scientific_name' => 'Dicentrarchus labrax'],
            ['common_name' => 'Pez sapo', 'scientific_name' => 'Lophius piscatorius'],
            ['common_name' => 'Cabrilla', 'scientific_name' => 'Serranus scriba'],
            ['common_name' => 'Erizo de mar', 'scientific_name' => 'Paracentrotus lividus'],
            ['common_name' => 'Corvina', 'scientific_name' => 'Argyrosomus regius'],
            ['common_name' => 'Pez aguja', 'scientific_name' => 'Belone belone'],
            ['common_name' => 'Cabracho rojo', 'scientific_name' => 'Scorpaena porcus'],
            ['common_name' => 'Vieja pintada', 'scientific_name' => 'Sparisoma cretense'],
            ['common_name' => 'Pejeperro', 'scientific_name' => 'Bodianus scrofa'],
            ['common_name' => 'Pez león', 'scientific_name' => 'Pterois miles'],
            ['common_name' => 'Congrio', 'scientific_name' => 'Conger conger'],
            ['common_name' => 'Pez gato', 'scientific_name' => 'Arius spp.'],
            ['common_name' => 'Langosta', 'scientific_name' => 'Palinurus elephas'],
            ['common_name' => 'Raya látigo', 'scientific_name' => 'Dasyatis pastinaca'],
            ['common_name' => 'Pez piedra', 'scientific_name' => 'Synanceia verrucosa'],
            ['common_name' => 'Pez trompeta', 'scientific_name' => 'Aulostomus maculatus'],
            ['common_name' => 'Pez escorpión', 'scientific_name' => 'Scorpaena scrofa'],
            ['common_name' => 'Pez angelote', 'scientific_name' => 'Squatina squatina'],
            ['common_name' => 'Pez caballito de mar', 'scientific_name' => 'Hippocampus hippocampus'],
            ['common_name' => 'Pez luna', 'scientific_name' => 'Mola mola'],
            ['common_name' => 'Raya torpedo', 'scientific_name' => 'Torpedo marmorata'],
        ];


        foreach ($species as $sp) {
            \App\Models\Species::create([
                'common_name' => $sp['common_name'],
                'scientific_name' => $sp['scientific_name'],
            ]);
        }
    }
}
