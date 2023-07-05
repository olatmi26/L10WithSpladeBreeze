<?php

namespace Database\Seeders;

use Keygen\Keygen;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Department::factory()->count(5)->create();
        $departments = [
            'Human Resources',
            'Administrative',
            'Sales',
            'Product Development',
            'Treasury',
            'Executive',
            'Fleet',
            'Engineering',
            'Production',
            'Laboratory',
            'Supply Chain',
            'Accounts',
            'Production',
            'Treasury',
            'Business Intelligence Unit',
            'Procurement',
            'Customer Satisfaction Centre',
            'Marketing',
            'Natnupreneur',
            'Business Efficiency',
            'Internal Control',
            'Quality Control',
            'Credit Control',
            'Internal Audit',
            'Information Technology',
            'Maintenance',
        ];

        //Department::truncate();
        foreach ($departments as $key => $department) {
            Department::create([
                'name' => $department,
                'slug' => Str::slug($department),
                'code' => Keygen::numeric(4)->generate(),
            ]);
        }
    }
}