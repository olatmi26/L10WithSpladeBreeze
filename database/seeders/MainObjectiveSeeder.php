<?php

namespace Database\Seeders;

use App\Models\BusinessEfficiency\MainObjective;
use Illuminate\Database\Seeder;

class MainObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MainObjective::factory()->count(5)->create();
    }
}
