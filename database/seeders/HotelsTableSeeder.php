<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelsTableSeeder extends Seeder
{
    public function run()
    {
        // Sample hotel data
        $hotels = [
            [
                'titre' => 'Hotel A',
                'adresse' => '123 Main Street',
                'prix_unitaire' => 100,
                'type_chambre' => 'Single',
            ],
            [
                'titre' => 'Hotel B',
                'adresse' => '456 Elm Street',
                'prix_unitaire' => 120,
                'type_chambre' => 'Double',
            ],
            // Add more hotel data as needed
        ];

        // Insert data into the hotels table
        foreach ($hotels as $hotel) {
            Hotel::create($hotel);
        }
    }
}
