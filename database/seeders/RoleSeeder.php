<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::factory()->count(5)->create();
        $roles = [
            'Super Admin',
            'Site Admin',
            'Accountant',
            'Admin Officer',
            'Receivable Accountant',
            'Payable Accountant',
            'Cost Accountant',
            'Budget Accountant',
            'Inventory Accountant',
            'Staff',
            'Security',
            'Driver',
            'Marketing',
            'Procurement Officer',
            'Procurement Import Director',
            'Procurement Vendor',
            'Customer Satisfaction Officer',
            'Efficiency Officer',
            'Connect-operator',
            'Graphics Designer',
            'Media Officer',
            'Sales',
            'GMD',
            'Executive Secretary',
            'Internal Control',
            'HIC',
            'GHRM',
            'Internal Audit',
            'HIA',
            'HOA',
            'General Manager',
            'HOD',
            'HOF',
            'Data Analyst',
            'Branch Accountant',
            'IT Officer',
            'Store-Keeper',
            'Depot Coordinator',
            'Head of Business',
        ];

        foreach ($roles as $key => $role) {
            Role::create(['name' => $role, 'slug' => Str::slug($role),]);
        }
    }
}