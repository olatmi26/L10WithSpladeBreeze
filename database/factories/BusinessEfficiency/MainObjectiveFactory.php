<?php

namespace Database\Factories\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BusinessEfficiency\EfficiencySetup;
use App\Models\BusinessEfficiency\MainObjective;

class MainObjectiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MainObjective::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'efficiency_setup_id' => EfficiencySetup::factory(),
            'majorCriterial' => $this->faker->word,
            'totalWeightedPoint' => $this->faker->randomNumber(),
        ];
    }
}
