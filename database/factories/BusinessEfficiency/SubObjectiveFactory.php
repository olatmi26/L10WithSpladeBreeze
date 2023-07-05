<?php

namespace Database\Factories\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BusinessEfficiency\EfficiencySetup;
use App\Models\BusinessEfficiency\MainObjective;
use App\Models\BusinessEfficiency\SubObjective;

class SubObjectiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubObjective::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'efficiency_setup_id' => EfficiencySetup::factory(),
            'main_objective_id' => MainObjective::factory(),
            'subObjectives' => $this->faker->text,
            'pointAlloted' => $this->faker->randomNumber(),
            'whoCanAccessIt' => $this->faker->text,
        ];
    }
}
