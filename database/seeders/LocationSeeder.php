<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Location::factory()->count(5)->create();
        $los = [
            'Akinyele',
            'Uyo',
            'Ogbomosho',
            'Head Office',
            'Kaduna',
            'Agege',
            'Lekki',
            'Kano',
            'Abuja',
            'Port Harcourt',
            'AWE',
            'ABA',
            'JOS',
            'Owerri',
        ];
        foreach ($los as $key => $location) {
            Location::create(['location' => $location]);
        }
    }
}