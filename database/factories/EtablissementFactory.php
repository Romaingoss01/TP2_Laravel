<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vinyle;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\etablissement>
 */
class EtablissementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomEtablissement'=> fake()->company(),
            'vinyle_id'=> Vinyle::factory(),
        ];
    }

    public function vinyles(){
        return $this->hasMany(Vinyle::class);
    }
}
