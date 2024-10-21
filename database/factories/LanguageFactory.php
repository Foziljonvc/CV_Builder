<?php

namespace Database\Factories;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Language::class;
    public function definition(): array
    {
        return [
            "name" => $this->faker->randomElement(["English", "Spanish", "Uzbek", "Russian"]),
            "level" => $this->faker->randomElement(['A1', 'A2', 'B1', 'B2', 'C1', 'C2']),
        ];
    }
}
