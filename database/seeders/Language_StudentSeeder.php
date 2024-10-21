<?php

namespace Database\Seeders;

use App\Models\Language_Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Language_StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language_Student::factory()->count(10)->create();
    }
}
