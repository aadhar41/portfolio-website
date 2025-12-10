<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        
        $this->call([
            HeroSeeder::class,
            TyperTitleSeeder::class,
            AboutSeeder::class,
            PortfolioSectionSettingSeeder::class,
            CategorySeeder::class,
            ServiceSeeder::class,
            PortfolioItemSeeder::class,
        ]);
    }
}
