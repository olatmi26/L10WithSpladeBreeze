<?php

namespace Database\Factories\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BusinessEfficiency\MainObjective;
use App\Models\BusinessEfficiency\PerformanceEvaluation;
use App\Models\BusinessEfficiency\PerformanceRegulation;
use App\Models\BusinessEfficiency\User;

class PerformanceRegulationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PerformanceRegulation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'performance_evaluation_id' => PerformanceEvaluation::factory(),
            'main_objective_id' => MainObjective::factory(),
            'regulatedPoint' => $this->faker->randomNumber(),
            'comment' => $this->faker->word,
            'regulatedBy' => User::factory(),
            'approvalStatus' => $this->faker->boolean,
            'approvedBy' => User::factory(),
        ];
    }
}
