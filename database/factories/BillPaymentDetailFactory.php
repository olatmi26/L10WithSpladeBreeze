<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bill;
use App\Models\BillPaymentDetail;
use App\Models\CompanyAccount;
use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorAccount;

class BillPaymentDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BillPaymentDetail::class;

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
            'debitedAccount' => CompanyAccount::factory(),
            'creditedAccount' => VendorAccount::factory(),
            'amountToPay' => $this->faker->randomFloat(2, 0, 999999.99),
            'amountProcessed' => $this->faker->randomFloat(2, 0, 999999.99),
            'balanceToPay' => $this->faker->randomFloat(2, 0, 999999.99),
            'dateProcessed' => $this->faker->dateTime(),
            'paidBy' => User::factory(),
        ];
    }
}
