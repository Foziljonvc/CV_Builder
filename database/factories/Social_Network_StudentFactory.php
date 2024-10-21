<?php

namespace Database\Factories;

use App\Models\Skills_Students;
use App\Models\Social_Network;
use App\Models\Social_Network_Student;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Social_Network_Student>
 */
class Social_Network_StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Social_Network_Student::class;
    public function definition(): array
    {
        return [
            "username" => $this->faker->name(),
            "student_id" => Student::inRandomOrder()->first()->id,
            "social_network_id" => Social_Network::inRandomOrder()->first()->id,
        ];
    }
}
