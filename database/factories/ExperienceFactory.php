<?php

namespace Database\Factories;

use App\Models\Experience;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Experience::class;
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "position" => $this->faker->jobTitle(),
            "description" => $this->faker->text(),
            "start" => $this->faker->date(),
            "end" => $this->faker->date(),
            "student_id" => Student::inRandomOrder()->first()->id,
        ];
    }
}
