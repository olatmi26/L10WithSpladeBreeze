<?php

namespace Database\Seeders;

use App\Models\VehicleCategory;
use Illuminate\Database\Seeder;

class VehicleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Staff Vehicle',
            'Logistics Vehicle',
            'Trucks for Products Delivery',
            'Delivery trucks for transporting day-old chicks and poultry feed',
            'Refrigerated trucks for transporting eggs and poultry products',
            'Tanker trucks for transporting liquid veterinary medicines and feed ingredients',
            'Flatbed trucks for transporting large equipment and machinery',
            'Pickup trucks for transporting small equipment and supplies',
            'Vans for transporting veterinary teams and sales personnel',
            'Livestock trailers for transporting chickens and other livestock',
            'Sales Representative Vehicle',
            'Others'
        ];
        foreach ($categories as $key => $value) {
            VehicleCategory::create([
                'category' => $value
            ]);
        }
        // VehicleCategory::factory()->count(5)->create();
    }
}