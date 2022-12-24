<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, 100),
            'domicilio' => $this->faker->word(),
            'numero_ext' => $this->faker->numberBetween(0, 4000),
            'colonia' => $this->faker->word(),
            'cp' => $this->faker->randomNumber(5, true),
            'ciudad' =>  $this->faker->word(),
        ];
    }
}
