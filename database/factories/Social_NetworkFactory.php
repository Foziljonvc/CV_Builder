<?php

namespace Database\Factories;

use App\Models\Social_Network;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Social_Network>
 */
class Social_NetworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Social_Network::class;
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "link" => $this->faker->url(),
        ];
    }
}
