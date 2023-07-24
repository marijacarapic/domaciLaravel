<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instruktor>
 */
class InstruktorFactory extends Factory
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
            'godiste' => $this->faker->numberBetween($min = 1975, $max = 1998),
            'specijalnost' => $this->faker->randomElement($array = array('Pilates',
             'Joga', 'CrossFit', 'Aerobik', 'Cardio', 'Bodybuilding')),
             'kontaktTelefon' => $this->faker->phoneNumber(),
        ];
    }
}
