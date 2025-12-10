<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Web Development',
                'description' => 'Building modern, responsive, and robust web applications using Laravel, React, and Vue.',
            ],
            [
                'name' => 'API Design',
                'description' => 'Designing and implementing scalable RESTful APIs for mobile and web consumption.',
            ],
            [
                'name' => 'Database Optimization',
                'description' => 'Optimizing database schemas and queries for maximum performance.',
            ],
            [
                'name' => 'Technical Consulting',
                'description' => 'Providing expert advice on technology stack selection and architecture.',
            ],
        ];

        foreach ($services as $service) {
            \App\Models\Service::create($service);
        }
    }
}
