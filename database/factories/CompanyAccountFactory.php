<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bank;
use App\Models\CompanyAccount;

class CompanyAccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompanyAccount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'accountName' => $this->faker->word,
            'bank_id' => Bank::factory(),
            'AccountNo' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'accountSwiftCode' => $this->faker->word,
            'balanceCredited' => $this->faker->randomFloat(2, 0, 999999.99),
            'balanceDebited' => $this->faker->randomFloat(2, 0, 999999.99),
            'balance' => $this->faker->randomFloat(2, 0, 999999.99),
        ];
    }
}
