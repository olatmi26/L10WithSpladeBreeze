<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bank;
use App\Models\Vendor;
use App\Models\VendorAccount;

class VendorAccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VendorAccount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vendor_id' => Vendor::factory(),
            'bank_id' => Bank::factory(),
            'accountName' => $this->faker->word,
            'AccountNo' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'balance' => $this->faker->randomFloat(2, 0, 999999.99),
            'otherDescription' => $this->faker->word,
        ];
    }
}
