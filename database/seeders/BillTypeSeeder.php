<?php

namespace Database\Seeders;

use App\Models\BillType;
use Illuminate\Database\Seeder;

class BillTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        BillType::create(['type' => 'Internet Service Bill Payment']);
        BillType::create(['type' => 'Goods Supplied Bill Paymnet']);
        BillType::create(['type' => 'Importation BIll Payment']);
        BillType::create(['type' => 'Raw materials BIll Payment']);
        BillType::create(['type' => 'Stationary Bill Payment']);
        BillType::create(['type' => 'IT Equipment Bill Payment']);
        BillType::create(['type' => 'Vehicle Repair Bill Payment']);
        BillType::create(['type' => 'AC Purchase Bill Payment']);
        BillType::create(['type' => 'AC Repair Bill Payment']);
        BillType::create(['type' => 'Electrical fault Repair Bill Payment']);
        BillType::create(['type' => 'Maintenance Bill Payment']);
        BillType::create(['type' => 'Procurement Based Bill Payment']);
        BillType::create(['type' => 'others']);
    }
}