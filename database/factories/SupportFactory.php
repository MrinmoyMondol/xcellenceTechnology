<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'cmp_name' => $this->faker->company(),

            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'comment' => $this->faker->paragraph(),
            'status' => $this->faker->numberBetween(0,1),
        ];
    }
}
