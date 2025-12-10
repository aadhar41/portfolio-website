<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TyperTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = ['Full Stack Developer', 'Freelancer', 'Laravel Expert', 'Web Enthusiast'];

        foreach ($titles as $title) {
            \App\Models\TyperTitle::create(['title' => $title]);
        }
    }
}
