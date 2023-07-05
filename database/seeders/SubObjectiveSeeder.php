<?php

namespace Database\Seeders;

use App\Models\BusinessEfficiency\SubObjective;
use Illuminate\Database\Seeder;

class SubObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubObjective::factory()->count(5)->create();
    }
}
