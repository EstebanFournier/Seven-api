<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestituedCarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = ["TOPREPARE", "READYTOGO", "GOCHECKED", "RETURNCHECKED", "NONE"];
        return [
            'model'=>$this->faker->word,
            'licensePlate'=>$this->faker->randomNumber(6, true),
            'statusVehicle'=>$this->faker->randomElement($status),
        ];
    }
}
