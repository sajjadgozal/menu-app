<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
*
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 100),
            'category_id' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

}
