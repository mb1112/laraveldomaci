<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Ime' => $this->faker->name(),
            'Prezime' => $this->faker->lastName(),
            'BrojIndeksa' => $this->faker->numerify('2018-####'),
        ];
    }
}
