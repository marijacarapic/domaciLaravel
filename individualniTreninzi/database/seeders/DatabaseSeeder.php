<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TreningSeeder;
use Database\Seeders\PolaznikSeeder;
use Database\Seeders\InstruktorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $InstruktorSeeder = new InstruktorSeeder;
        $InstruktorSeeder->run();

        $PolaznikSeeder = new PolaznikSeeder;
        $PolaznikSeeder->run();

        $TreningSeeder = new TreningSeeder;
        $TreningSeeder->run(); 
    }
}
