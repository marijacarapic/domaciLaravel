<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Polaznik>
 */
class PolaznikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imePrezime' => $this->faker->name(),
            'grad' => $this->faker->city(),
            'godiste' => $this->faker->numberBetween($min = 1970, $max = 2005),
        ];
    }
}
