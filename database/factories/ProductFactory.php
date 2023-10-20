<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->numerify('######'),
            'designation' => $this->faker->sentence,
            'stock' => $this->faker->numberBetween(30, 100),
            'alert_stock' => $this->faker->numberBetween(0, 30),
            'unit' => $this->faker->randomElement(['kg', 'piece', 'box']),
            'id_category' => function () {
                return Category::factory()->create()->id;
        },

        ];
    }
}
