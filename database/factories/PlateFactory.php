<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'comensales' => $this->faker->numberBetween($min = 1, $max = 5),
            'gluten_free' => $this->faker->numberBetween($min = 0, $max = 1)
        ];
    }
}
