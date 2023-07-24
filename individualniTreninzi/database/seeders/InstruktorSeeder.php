<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instruktor;

class InstruktorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instruktor1 = Instruktor::factory()->create();
        $instruktor2 = Instruktor::factory()->create();   
        $instruktor3 = Instruktor::factory()->create();
    }
}
