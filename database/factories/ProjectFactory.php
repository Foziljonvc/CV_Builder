<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Project::class;
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->text(),
            "source_link" => $this->faker->url(),
            "demo_link" => $this->faker->url(),
            "student_id" => Student::inRandomOrder()->first()->id,
        ];
    }
}
