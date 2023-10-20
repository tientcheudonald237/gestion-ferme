<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockMovementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_product' => function () {
                return Product::factory()->create()->id;
            },
            'bill_number' => $this->faker->optional()->numerify('#####'),
            'quantity' => $this->faker->numberBetween(1, 100),
            'unit_acquisition_price' => $this->faker->optional()->randomFloat(2, 0, 100),
            'type' => $this->faker->randomElement(['entry']),
            'observation' => $this->faker->optional()->sentence,
        ];
    }
}
