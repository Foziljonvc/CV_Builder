<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\Language_Student;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language_Student>
 */
class Language_StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Language_Student::class;
    public function definition(): array
    {
        return [
            'student_id' => Student::inRandomOrder()->first()->id,
            'language_id' => Language::inRandomOrder()->first()->id,
        ];
    }
}
