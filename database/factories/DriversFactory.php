<?php

namespace Database\Factories;

use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Drivers;

class DriversFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $companies = Companies::all()->pluck('id')->toArray();
        return [
            'lastName' => $this->faker->lastName,
            'firstName' => $this->faker->firstName,
            'street' => $this->faker->streetName,
            'postalCode' => $this->faker->postcode,
            'professionalEmail' => $this->faker->companyEmail,
            'mobileNumber' => $this->faker->phoneNumber,
            'drivingLicenseNumber' => $this->faker->randomNumber(6, true),
            'company_id' => $this->faker->randomElement($companies),
        ];
    }
}
