<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IspitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'predmet_id' => $this->faker->randomDigitNot(0),
            'student_id' => $this->faker->randomDigitNot(0),
            'Rezultat' => $this->faker->randomElement($array = array ('Polozio','Pao'))
      
        ];
    }
}
