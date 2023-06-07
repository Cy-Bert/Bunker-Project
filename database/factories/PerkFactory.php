<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PerkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'desc' => $this->faker->text(),
            'type' => $this->faker->randomElement(['bonus', 'malus']),
            'character_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
