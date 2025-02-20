<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Etablissement;
use App\Models\Artiste;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vinyle>
 */
class VinyleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->sentence(8),
            'release_year'=> fake()->year(),
            'label'=> fake()->sentence(3),
            'artiste_id' => Artiste::factory(),
            'description' => fake()->text(),

        ];
    }

    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'isadmin' => true,
        ]);
    }


}
