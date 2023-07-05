<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // VehicleType::factory()->count(5)->create();
        VehicleType::create(['type' => 'Camry 2013']);
        VehicleType::create(['type' => 'Corona 2012']);
        VehicleType::create(['type' => 'Toyota 2015']);
        VehicleType::create(['type' => 'Highlander 2019']);
        VehicleType::create(['type' => 'RAV4 2015']);
        VehicleType::create(['type' => 'Hilux 2010']);
        VehicleType::create(['type' => 'add new']);
    }
}