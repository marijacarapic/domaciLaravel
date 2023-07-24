<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Polaznik;
use App\Models\Instruktor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trening>
 */
class TreningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->randomElement($array = array('HIIT trening',
            'Joga', 'Trening za mrsavljenje', 'Funkcionalni trening', 'Pilates trening', 'Trening za seniore',
            'Trening za trkace', 'Boot camp izazov', 'CrossFit izazov')),
            'trajanje' => $this->faker->numberBetween($min = 60, $max = 120),
            'nivoTezine' => $this->faker->randomElement($array = array('Lako','Srednje','Tesko')),
            'polaznik_id' => Polaznik::factory(),
            'instruktor_id' => Instruktor::factory(),
        ];
    }
}
