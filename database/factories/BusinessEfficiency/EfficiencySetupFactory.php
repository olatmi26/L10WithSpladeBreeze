<?php

namespace Database\Factories\BusinessEfficiency;

use App\Models\Company;
use App\Models\Department;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\BusinessEfficiency\EfficiencySetup;
use Illuminate\Database\Eloquent\Factories\Factory;

class EfficiencySetupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EfficiencySetup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'department_id' => Department::factory(),
            'company_id' => Company::factory(),
            'setupBy' => User::factory(),
        ];
    }
}