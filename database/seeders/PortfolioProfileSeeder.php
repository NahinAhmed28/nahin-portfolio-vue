<?php

namespace Database\Seeders;

use App\Models\PortfolioProfile;
use Illuminate\Database\Seeder;

class PortfolioProfileSeeder extends Seeder
{
    public function run(): void
    {
        PortfolioProfile::updateOrCreate(
            ['email' => 'nahin.ahmed28@gmail.com'],
            [
                'full_name' => 'Ahmed Nur-A-Jalal (Nahin)',
                'phone' => '+8801521332113',
                'address' => 'East-Kazipara, Mirpur, Dhaka',
                'hero_title' => 'I am Ahmed Nur-A-Jalal (Nahin)',
                'hero_roles' => ['Android Developer', 'Web Developer', 'Designer', 'Freelancer', 'Photographer'],
                'about_summary' => 'Laravel and Vue focused full-stack developer building portfolio, business and product experiences.',
                'services' => [
                    ['title' => 'Back End Web Development', 'description' => 'Laravel framework based backend development.'],
                    ['title' => 'Front End Development', 'description' => 'Vue.js and Bootstrap based responsive UI development.'],
                    ['title' => 'Technical Documentation', 'description' => 'End-to-end software and technical documentation support.']
                ],
            ]
        );
    }
}
