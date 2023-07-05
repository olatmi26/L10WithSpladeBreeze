<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Type;
use App\Models\User;
use App\Models\Vehicle;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plateNo' => $this->faker->regexify('[A-Za-z0-9]{12}'),
            'dueStatus' => $this->faker->boolean,
            'enteredBy' => User::factory(),
            'chassesN0' => $this->faker->regexify('[A-Za-z0-9]{120}'),
            'color' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'type_id' => Type::factory(),
        ];
    }
}
