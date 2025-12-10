<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'image' => 'uploads/00001-00003_Aadhar_Gaur_PHP_Laravel_CV_And_Projects_Portfolio_page-0001.jpg',
                'title' => 'E-Commerce Platform',
                'description' => 'A full-stack e-commerce solution with payment integration.',
                'category_id' => 1, // Laravel
            ],
            [
                'image' => 'uploads/00002-00003_Aadhar_Gaur_PHP_Laravel_CV_And_Projects_Portfolio_page-0002.jpg',
                'title' => 'Portfolio CMS',
                'description' => 'Dynamic portfolio management system.',
                'category_id' => 1, // Laravel
            ],
            [
                'image' => 'uploads/00003-00003_Aadhar_Gaur_PHP_Laravel_CV_And_Projects_Portfolio_page-0003.jpg',
                'title' => 'Social Network App',
                'description' => 'Real-time social networking platform.',
                'category_id' => 2, // PHP
            ],
            [
                'image' => 'uploads/00004-00003_Aadhar_Gaur_PHP_Laravel_CV_And_Projects_Portfolio_page-0004.jpg',
                'title' => 'Task Management Tool',
                'description' => 'Project management and collaboration tool.',
                'category_id' => 3, // React
            ],
            [
                'image' => 'uploads/00005-00003_Aadhar_Gaur_PHP_Laravel_CV_And_Projects_Portfolio_page-0005.jpg',
                'title' => 'Blog Engine',
                'description' => 'Customizable blogging platform.',
                'category_id' => 2, // PHP
            ],
            [
                'image' => 'uploads/00006-00003_Aadhar_Gaur_PHP_Laravel_CV_And_Projects_Portfolio_page-0006.jpg',
                'title' => 'API Gateway',
                'description' => 'Centralized API gateway for microservices.',
                'category_id' => 1, // Laravel
            ],
            [
                'image' => 'uploads/00007-00003_Aadhar_Gaur_PHP_Laravel_CV_And_Projects_Portfolio_page-0007.jpg',
                'title' => 'Inventory System',
                'description' => 'Warehouse and inventory tracking system.',
                'category_id' => 4, // Vue
            ],
            [
                'image' => 'uploads/00008-00003_Aadhar_Gaur_PHP_Laravel_CV_And_Projects_Portfolio_page-0008.jpg',
                'title' => 'CRM Dashboard',
                'description' => 'Customer Relationship Management dashboard.',
                'category_id' => 5, // Full Stack
            ],
            [
                'image' => 'uploads/00009-00003_Aadhar_Gaur_PHP_Laravel_CV_And_Projects_Portfolio_page-0009.jpg',
                'title' => 'Learning Management System',
                'description' => 'Online education and course management.',
                'category_id' => 1, // Laravel
            ],
        ];

        foreach ($items as $item) {
            \App\Models\PortfolioItem::create($item);
        }
    }
}
