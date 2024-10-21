<?php

namespace Database\Seeders;

use App\Models\Social_Network;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StudentSeeder::class,
            ProjectSeeder::class,
            EducationSeeder::class,
            LanguageSeeder::class,
            Language_StudentSeeder::class,
            ExperienceSeeder::class,
            Social_NetworkSeeder::class,
            Social_Network_StudentSeeder::class,
            SkillsSeeder::class,
            Skills_StudentSeeder::class,
        ]);
    }
}
