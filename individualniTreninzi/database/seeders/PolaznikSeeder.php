<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Polaznik;


class PolaznikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $polaznik1 = Polaznik::factory()->create();
        $polaznik2 = Polaznik::factory()->create();   
    }
}
