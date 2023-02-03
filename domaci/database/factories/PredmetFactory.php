<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PredmetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Naziv' => $this->faker->sentence($nbWords = 1, $variableNbWords = true),
            'OpisPredmeta' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'Naziv katedre' => $this->faker->sentence($nbWords = 1, $variableNbWords = true),
        ];
    }
}
