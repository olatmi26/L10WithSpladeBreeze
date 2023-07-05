<?php

namespace Database\Factories\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BusinessEfficiency\EfficiencyPayment;
use App\Models\BusinessEfficiency\PerformanceEvaluation;

class EfficiencyPaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EfficiencyPayment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'performance_evaluation_id' => PerformanceEvaluation::factory(),
            'amountToPay' => $this->faker->randomFloat(2, 0, 999999.99),
        ];
    }
}
