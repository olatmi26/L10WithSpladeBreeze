<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bank;
use Keygen\Keygen;

class BankFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bank::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
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
            return [
                'name' => $bank,
                'code' => Keygen::numeric(4)->generate(),
            ];
        }
    }
}