<?php

namespace Database\Seeders;

use App\Models\BillCategory;
use Illuminate\Database\Seeder;

class BillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BillCategory::factory()->count(5)->create();
        BillCategory::create(['category' => 'Nigeria based Vendor Bill']);
        BillCategory::create(['category' => 'International Bill']);
        BillCategory::create(['category' => 'Staff Bill']);
    }
}