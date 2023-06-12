<?php

namespace Database\Factories;


use App\Models\Drivers;
use App\Models\PlaceEnd;
use App\Models\PlaceStart;
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
        /*$booker = User::all()->pluck('id')->where('user_category_id', 3)->toArray();
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
        ];*/

        $driver_id = Drivers::all()->pluck('id')->toArray();
        $vehicle_id = Vehicles::all()->pluck('id')->toArray();
        $placeStart_id = PlaceStart::all()->pluck('id')->toArray();
        $placeEnd_id = PlaceEnd::all()->pluck('id')->toArray();
        return [
            'number'=>$this->faker->randomNumber,
            'date'=>$this->faker->date,
            'dateStart'=>$this->faker->date,
            'dateEnd'=>$this->faker->date,
            'halfDayStart'=>$this->faker->randomNumber,
            'halfDayEnd'=>$this->faker->randomNumber,
            'status'=>$this->faker->word,
            'driver_id'=>$this->faker->randomElement($driver_id),
            'vehicle_id'=>$this->faker->randomElement($vehicle_id),
            'placeStart_id'=>$this->faker->randomElement($placeStart_id),
            'placeEnd_id'=>$this->faker->randomElement($placeEnd_id),

        ];
    }
}
