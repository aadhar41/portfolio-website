<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\About::create([
            'title' => 'About Me',
            'description' => 'I am a passionate Full Stack Developer with experience in building dynamic web applications using Laravel, React, and Vue.js.',
            'image' => 'uploads/00002-00003_Aadhar_Gaur_PHP_Laravel_CV_And_Projects_Portfolio_page-0002.jpg',
            'resume' => '#',
        ]);
    }
}
