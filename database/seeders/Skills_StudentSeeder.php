<?php

namespace Database\Seeders;

use App\Models\Skills_Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Skills_StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skills_Students::factory()->count(10)->create();
    }
}
