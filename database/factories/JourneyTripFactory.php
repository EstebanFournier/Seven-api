<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JourneyTripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'type' => $this->faker->randomElement(['Aller simple', 'Aller retour']),
        'cityStart'=>$this->faker->city,
        'cityEnd'=>$this->faker->city,
        'dateStart'=>$this->faker->date,
        'dateEnd'=>$this->faker->date,
        'nbPassenger'=>$this->faker->randomNumber(2, true),
        ];
    }
}
