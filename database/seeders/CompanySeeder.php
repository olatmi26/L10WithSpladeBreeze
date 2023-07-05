<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Company::factory()->count(5)->create();
        //Company::truncate();
        Company::create(['name' => 'Amo Farm Sieberer Hatchery Ltd - AFSH']);
        Company::create(['name' => 'Amobyng Nig Ltd - ABNL']);
        Company::create(['name' => 'natnudOfoods']);
        Company::create(['name' => 'Diversay solutions Ltd - DSL']);
        Company::create(['name' => 'DSLPharma']);
        Company::create(['name' => 'Seabless']);
        Company::create(['name' => 'Head Office']);
    }
}