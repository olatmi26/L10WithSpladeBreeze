<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $num = ['080', '081', '070', '090', '091'];
        $num2 = ['M', 'F'];
        return [
            'firstName' => fake()->firstName($gender =  'male' | 'female'),
            'lastName' => fake()->lastName($gender =  'male' | 'female'),
            'phoneN0' => $num[array_rand($num, 1)] . $this->faker->numerify('########'),
            'profilePicture' => null,
            'AccessPin' => rand(0000, 99999),
            'gender' => $num2[array_rand($num2, 1)],
            'dept_id' => Department::all()->random()->id,
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password@2022'),
            'remember_token' => Str::random(10),
            // 'email_verified_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}