<?php

namespace Database\Factories;

use App\Models\Agencies;
use App\Models\Drivers;
use App\Models\User;
use App\Models\Vehicles;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $booker = User::all()->pluck('id')->where('user_category_id', 3)->toArray();
        $vehicle = Vehicles::all()->pluck('id')->toArray();
        $driver = Drivers::all()->pluck('id')->toArray();
        $agency = Agencies::all()->pluck('id')->toArray();
        return [
            'booker_id' => $this->faker->randomElement($booker),
            'vehicle_id' => $this->faker->randomElement($vehicle),
            'drivers_id' => $this->faker->randomElement($driver),
            'returnTicket_id' => $this->faker->randomNumber(1, true),
            'agency_id' => $this->faker->randomElement($agency),
            'journey_trip_id' => $this->faker->randomNumber(1, true),
        ];
    }
}
