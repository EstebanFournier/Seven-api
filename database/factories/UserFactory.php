<?php

namespace Database\Factories;

use App\Models\Agencies;
use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\UserCategory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_category = UserCategory::all()->pluck('id')->toArray();
        $companies = Companies::all()->pluck('id')->toArray();
        $agencies = Agencies::all()->pluck('id')->toArray();
        return [
            'name' => $this->faker->userName,
            'email' => $this->faker->email,
            'password' => Hash::make('12345'),
            'user_category_id' => $this->faker->randomElement($user_category),
            'company_id' => $this->faker->randomElement($companies),
            'agency_id'=>$this->faker->randomElement($agencies),
        ];
    }
}
