<?php

namespace Database\Factories;

use App\Http\Resources\BookerId;
use App\Models\User;
use App\Models\Agencies;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiclesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = ["TOPREPARE", "READYTOGO", "GOCHECKED", "RETURNCHECKED", "NONE"];
        $agencies = Agencies::all()->pluck('id')->toArray();
        return [
            'immatriculation' => $this->faker->randomNumber(6, true),
            'brand' => $this->faker->company,
            'model' => $this->faker->word,
            'agency_id' => $this->faker->randomElement($agencies),
            'status' => $this->faker->randomElement($status),
        ];
    }
}
