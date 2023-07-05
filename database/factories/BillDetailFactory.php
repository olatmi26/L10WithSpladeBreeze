<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bank;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Vendor;

class BillDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BillDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bill_id' => Bill::factory(),
            'vendor_id' => Vendor::factory(),
            'bank_id' => Bank::factory(),
            'BankName' => $this->faker->word,
            'AccountNo' => $this->faker->word,
            'Amount' => $this->faker->randomFloat(2, 0, 999999.99),
        ];
    }
}
