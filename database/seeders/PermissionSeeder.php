<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'add new entry',
            'edit entry',
            'view entry',
            'delete entry',
            'send mail',
            'print voucher',
            'report',
            'download excel',
            'analysis',
            'update entry',
            'approve entry',
            'reject entry',
            'request delievry',
            'Send Delivery Order',
            'edit post',
            'approve request',
            'decline request',
            'suspend user',
            'add budget',
            'view budget',
            'update budget',
            'upload',
            'download',
            'view report',
            'download report',
        ];

        // Permission::query()->delete();/

        foreach ($permissions as $permis) {
            Permission::create(['name' => $permis, 'slug' => Str::slug($permis),]);
        }
    }
}