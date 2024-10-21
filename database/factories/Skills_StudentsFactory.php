<?php

namespace Database\Factories;

use App\Models\Skills;
use App\Models\Skills_Students;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skills_Students>
 */
class Skills_StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Skills_Students::class;
    public function definition(): array
    {
        return [
            "student_id" => Student::inRandomOrder()->first()->id,
            "skill_id" => Skills::inRandomOrder()->first()->id,
        ];
    }
}
