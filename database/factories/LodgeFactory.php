<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LodgeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'maximum_number' => $this->faker->numberBetween(1, 10),
            'position_description' => $this->faker->sentence(),
            'id_building' => function () {
                return \App\Models\Building::factory()->create()->id;
            },
        ];
    }
}
