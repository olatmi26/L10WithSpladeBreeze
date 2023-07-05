<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bill;
use App\Models\BillCategory;
use App\Models\BillType;
use App\Models\Department;
use App\Models\User;
use App\Models\Vendor;

class BillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'ApprovalId' => $this->faker->word,
            'company_id' => $this->faker->randomNumber(),
            'dept_id' => $this->faker->randomNumber(),
            'vendor_id' => Vendor::factory(),
            'purpose' => $this->faker->text,
            'bill_type_id' => BillType::factory(),
            'bill_category_id' => BillCategory::factory(),
            'totalAmountOnBill' => $this->faker->randomFloat(2, 0, 999999.99),
            'amountPartlyPaid' => $this->faker->randomFloat(2, 0, 999999.99),
            'dateDue' => $this->faker->date(),
            'overdueDate' => $this->faker->date(),
            'pendingWithDept' => Department::factory(),
            'pendingWithPerson' => User::factory(),
            'reminderCount' => $this->faker->numberBetween(-10000, 10000),
            'paymentStatus' => $this->faker->boolean,
        ];
    }
}
