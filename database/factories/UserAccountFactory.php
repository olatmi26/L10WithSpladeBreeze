<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bank;
use App\Models\User;
use App\Models\UserAccount;

class UserAccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAccount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'bank_id' => Bank::factory(),
            'accountName' => $this->faker->word,
            'AccountNo' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'balance' => $this->faker->randomFloat(2, 0, 999999.99),
            'otherDescription' => $this->faker->word,
        ];
    }
}
