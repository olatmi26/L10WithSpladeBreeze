<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bill;
use App\Models\BillManagerComments;
use App\Models\User;

class BillManagerCommentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BillManagerComments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bill_id' => Bill::factory(),
            'commentBy' => User::factory(),
            'commenterReplyBy' => User::factory(),
            'commentMsg' => $this->faker->word,
            'replyMsg' => $this->faker->word,
        ];
    }
}
