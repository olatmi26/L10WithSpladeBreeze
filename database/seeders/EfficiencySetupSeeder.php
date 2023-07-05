<?php

namespace Database\Seeders;

use App\Models\BusinessEfficiency\EfficiencySetup;
use Illuminate\Database\Seeder;

class EfficiencySetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EfficiencySetup::factory()->count(5)->create();
    }
}
