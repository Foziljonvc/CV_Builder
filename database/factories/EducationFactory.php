<?php

namespace Database\Factories;

use App\Models\Education;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Education::class;
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->text(),
            "start" => $this->faker->date(),
            "end" => $this->faker->date(),
            "student_id" => Student::inRandomOrder()->first()->id,
        ];
    }
}
