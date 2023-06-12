<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use App\Models\Vehicles;
use Illuminate\Database\Eloquent\Factories\Factory;

class WithdrawalTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::all()->pluck('id')->toArray();
        $matriculation = Vehicles::all()->pluck('immatriculation')->toArray();
        $dammage = ['RS', 'RP', 'EC'];
        return [
            'userCreator_id'=>$this->faker->randomElement($user),
            'vehicleModel'=>$this->faker->word,
            'vehicleMatriculation'=>$this->faker->randomElement($matriculation, true, true),
            //'booking_id'=>$this->faker->randomNumber(1, true),
            'mileage'=>$this->faker->randomNumber(6, true),
            'dateHourControl'=>$this->faker->dateTime,
            'aileAVG'=>$this->faker->randomElement($dammage),
            'aileARG'=>$this->faker->randomElement($dammage),
            'calandre'=>$this->faker->randomElement($dammage),
            'phareAVD'=>$this->faker->randomElement($dammage),
            'siegePass'=>$this->faker->randomElement($dammage),
            'porteAVG'=>$this->faker->randomElement($dammage),
            'aileAVD'=>$this->faker->randomElement($dammage),
            'aileARD'=>$this->faker->randomElement($dammage),
            'phareAVG'=>$this->faker->randomElement($dammage),
            'siegeCond'=>$this->faker->randomElement($dammage),
            'tdb'=>$this->faker->randomElement($dammage),
            'porteAVD'=>$this->faker->randomElement($dammage),
            'observation'=>$this->faker->text,
        ];
    }
}
