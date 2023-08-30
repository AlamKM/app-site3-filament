<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_code' => fake()->randomNumber(6,true),
            'item_name' => fake()->words(6,true),
            'category' => fake()->creditCardType(),
            'sub_category' => fake()->domainWord(),
            'unit' => "Kgs",
            'note' => fake()->sentences(),
        ];
    }
}
