<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Hero::create([
            'title' => 'I am Aadhar Gaur',
            'sub_title' => 'Full Stack Developer & Laravel Expert',
            'btn_txt' => 'Download CV',
            'btn_url' => '#',
            'image' => 'uploads/2102865779_home-slider-2.jpg',
        ]);
    }
}
