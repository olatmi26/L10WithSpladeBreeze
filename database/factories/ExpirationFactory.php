<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Company;
use App\Models\Document;
use App\Models\Expiration;
use App\Models\User;
use App\Models\Vehicle;

class ExpirationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expiration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'document_id' => Document::factory(),
            'vehicle_id' => Vehicle::factory(),
            'ownBy' => User::factory(),
            'company_id' => Company::factory(),
            'dateRenew' => $this->faker->date(),
            'expireDate' => $this->faker->date(),
            'nextRenewal' => $this->faker->date(),
            'notificationPeriod' => $this->faker->randomNumber(),
            'expirationStatus' => $this->faker->boolean,
            'enteredBy' => User::factory(),
        ];
    }
}
