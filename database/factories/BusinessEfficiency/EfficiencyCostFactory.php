<?php

namespace Database\Factories\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BusinessEfficiency\EfficiencyCost;
use App\Models\Company;

class EfficiencyCostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EfficiencyCost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => Company::factory(),
            'TotalCost' => $this->faker->randomFloat(2, 0, 999999.99),
        ];
    }
}
