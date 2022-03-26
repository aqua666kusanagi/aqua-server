<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChemicalElementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(),
            'chemical_code' => $this->faker->word(),
        ];
    }
}
