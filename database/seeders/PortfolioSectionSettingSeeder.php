<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSectionSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PortfolioSectionSetting::create([
            'title' => 'My Portfolio',
            'sub_title' => 'Here are some of my recent projects demonstrating my skills in web development.',
        ]);
    }
}
