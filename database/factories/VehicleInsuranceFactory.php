<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleInsurance;
use App\Models\VehicleType;

class VehicleInsuranceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VehicleInsurance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicle_id' => Vehicle::factory(),
            'certificateNo' => $this->faker->word,
            'naicomId' => $this->faker->word,
            'policyNo' => $this->faker->word,
            'VehicleRegN0' => $this->faker->word,
            'vehicleType' => VehicleType::factory(),
            'holderNameNo' => $this->faker->word,
            'insurancePeriodStart' => $this->faker->date(),
            'insurancePeriodEnd' => $this->faker->date(),
            'insuranceCertTemplate' => $this->faker->word,
            'issuedTo' => User::factory(),
        ];
    }
}
