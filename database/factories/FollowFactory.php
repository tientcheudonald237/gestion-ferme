<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FollowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'designation' => $this->faker->word,
            'weight' => $this->faker->numberBetween(1, 100),
            'sex' => $this->faker->randomElement(['male', 'female']),
            'is_to_buy' => $this->faker->randomElement([1,0]),
            'buying_price' => $this->faker->randomFloat(2, 10, 100),
            'id_lodge' => function () {
                return \App\Models\Lodge::factory()->create()->id;
            },
        ];
    }
}
