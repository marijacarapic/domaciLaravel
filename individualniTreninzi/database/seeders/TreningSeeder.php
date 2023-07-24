<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trening;
use App\Models\Instruktor;
use App\Models\Polaznik;

class TreningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instruktor1 = Instruktor::factory()->create();
        $instruktor2 = Instruktor::factory()->create();

        $polaznik1 = Polaznik::factory()->create();
        $polaznik2 = Polaznik::factory()->create();

        Trening::factory(3)->create([
            'instruktor_id'=>$instruktor1->id,
            'polaznik_id'=>$polaznik1->id
           ]);

           Trening::factory(2)->create([
            'instruktor_id'=>$instruktor1->id,
            'polaznik_id'=>$polaznik2->id
           ]);

           Trening::factory(2)->create([
            'instruktor_id'=>$instruktor2->id,
            'polaznik_id'=>$polaznik2->id
           ]);
    }
}
