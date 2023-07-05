<?php

namespace Database\Seeders;

use Keygen\Keygen;
use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Bank::factory()->count(19)->create();
        $bks = [
            'Access Bank',
            'First Bank',
            'GTB',
            'Fidelity Bank',
            'Union Bank',
            'Zenith Bank',
            'FCMB',
            'UBA Bank',
            'Citibank',
            'Ecobank',
            'Heritage Bank',
            'Keystone Bank',
            'Polaris Bank',
            'Stanbic IBTC Bank',
            'Standard Chartered Bank',
            'Sterling Bank',
            'Unity Bank Plc',
            'Wema Bank',
            'Jaiz Bank',
        ];

        foreach ($bks as $key => $bank) {
            Bank::create([
                'name' => $bank,
                'code' => Keygen::numeric(4)->generate(),
            ]);
        }
    }
}