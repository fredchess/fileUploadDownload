<?php

namespace Database\Factories;

use App\Models\Fichier;
use Illuminate\Database\Eloquent\Factories\Factory;

class FichierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fichier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(4),
            'type' => $this->faker->numberBetween(1, 4),
            'size' => $this->faker->randomFloat(2, 0, 100),
            'created_at' => now()
        ];
    }
}
