<?php

namespace Database\Factories\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BusinessEfficiency\EfficiencySetup;
use App\Models\BusinessEfficiency\MainObjective;
use App\Models\BusinessEfficiency\PerformanceEvaluation;
use App\Models\BusinessEfficiency\SubObjective;
use App\Models\BusinessEfficiency\User;

class PerformanceEvaluationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PerformanceEvaluation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'trackNo' => $this->faker->word,
            'userToEvaluate' => User::factory(),
            'monthEvaluated' => $this->faker->dateTime(),
            'efficiency_setup_id' => EfficiencySetup::factory(),
            'main_objective_id' => MainObjective::factory(),
            'sub_objective_id' => SubObjective::factory(),
            'rating' => $this->faker->randomNumber(),
            'totalScore' => $this->faker->randomNumber(),
            'gradedBy' => User::factory(),
            'accessibleTO' => $this->faker->text,
            'dateSubmitted' => $this->faker->dateTime(),
            'paymentStatus' => $this->faker->boolean,
            'approvalStatus' => $this->faker->boolean,
            'approvedBy' => User::factory(),
        ];
    }
}
