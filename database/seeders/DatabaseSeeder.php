<?php

namespace Database\Seeders;

use App\Models\Agencies;
use App\Models\RestituedCar;
use App\Models\WithdrawalTicket;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserCategory;
use App\Models\Company;
use App\Models\Vehicle;
use App\Models\Drivers;
use App\Models\Agency;
use App\Models\Companies;
use App\Models\JourneyTrip;
use App\Models\ReturnTicket;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seven_admin_role = new UserCategory();
        $seven_admin_role->label = "Administrateur Seven";
        $seven_admin_role->ref = "seven-admin";
        $seven_admin_role->save();

        $client_admin_role = new UserCategory();
        $client_admin_role->label = "Administrateur client";
        $client_admin_role->ref = "client-admin";
        $client_admin_role->save();

        $client_booker_role = new UserCategory();
        $client_booker_role->label = "Réserveur client";
        $client_booker_role->ref = "client-booker";
        $client_booker_role->save();

        $seven_agent_role = new UserCategory();
        $seven_agent_role->label = "Agent Seven";
        $seven_agent_role->ref = "seven-agent";
        $seven_agent_role->save();

        $seven_controller_role = new UserCategory();
        $seven_controller_role->label = "Controller Seven";
        $seven_controller_role->ref = "seven-controller";
        $seven_controller_role->save();

        $this->call(CompaniesSeeder::class);
        $this->call(AgenciesSeeder::class);
        $this->call(DriversSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VehiclesSeeder::class);
        $this->call(ReturnTicketSeeder::class);
        $this->call(JourneyTripSeeder::class);
        $this->call(placeEndSeeder::class);
        $this->call(placeStartSeeder::class);
        $this->call(RestituedCarSeeder::class);
        $this->call(WithdrawalTicketSeeder::class);

        $this->call(BookingSeeder::class);

        $company_seven_admin = new Companies();
        $company_seven_admin->name= "seven Admin Company";
        $company_seven_admin->save();

        $company_seven_agent = new Companies();
        $company_seven_agent->name= "seven agent Company";
        $company_seven_agent->save();

        $company_seven_controller = new Companies();
        $company_seven_controller->name= "seven controller Company";
        $company_seven_controller->save();

        $company_client_booker = new Companies();
        $company_client_booker->name= "client booker Company";
        $company_client_booker->save();

        $company_client_admin = new Companies();
        $company_client_admin->name= "client admin Company";
        $company_client_admin->save();

        $user = new User();
        $user->firstname = "test seven admin";
        $user->lastname = "admin";
        $user->email = "admin@seven.fr";
        $user->password = Hash::make("test");
        $user->user_category()->associate($seven_admin_role);
        $user->user_company()->associate($company_seven_admin);
        $user->save();


        $user = new User();
        $user->firstname = "test seven agent";
        $user->lastname = "agent";
        $user->email = "agent@seven.fr";
        $user->password = Hash::make("test");
        $user->user_category()->associate($seven_agent_role);
        $user->user_company()->associate($company_seven_agent);
        $user->save();

        $user = new User();
        $user->firstname = "test seven controller";
        $user->lastname = "controller";
        $user->password = Hash::make("test");
        $user->email = "controller@seven.fr";
        $user->user_category()->associate($seven_controller_role);
        $user->user_company()->associate($company_seven_controller);
        $user->save();

        $user = new User();
        $user->firstname = "test client booker";
        $user->lastname = "booker";
        $user->password = Hash::make("test");
        $user->email = "clientbooker@seven.fr";
        $user->user_category()->associate($client_booker_role);
        $user->user_company()->associate($company_client_booker);
        $user->save();

        $user = new User();
        $user->firstname = "test client admin";
        $user->lastname = "admin";
        $user->password = Hash::make("test");
        $user->email = "clientadmin@seven.fr";
        $user->user_category()->associate($client_admin_role);
        $user->user_company()->associate($company_client_admin);
        $user->save();
    }



    /* $faker = Faker::create();

        $compagnies = [];
        $all_bookers = []; */

    /* foreach (range(0, 2) as $_) {
            $company = new Companies();
            $company->name = $faker->company();
            $company->save(); */

    /* $company_client_admins = [];

            foreach (range(0, 1) as $_) {
                $client_admin = new User();
                $client_admin->name = $faker->userName();
                $client_admin->password = Hash::make("test");
                $client_admin->email = $faker->email();
                $client_admin->user_category()->associate($client_admin_role);
                $client_admin->company()->associate($company);
                $client_admin->save();
                $company_client_admins[] = $client_admin;
            }; */

    /* foreach (range(0, 5) as $_) {
                $driver = new Drivers();
                $driver->lastName = $faker->lastName();
                $driver->firstName = $faker->firstName();
                $driver->street = $faker->streetName();
                $driver->postalCode = $faker->postcode();
                $driver->professionalEmail = $faker->companyEmail();
                if ($faker->boolean()) {
                    $driver->mobileNumber = $faker->phoneNumber();
                };
                $driver->drivingLicenseNumber = $faker->randomNumber(6, true);
                $driver->company()->associate($company);
                $driver->save();
            } */

    /* foreach (range(0, 1) as $_) {
                $client_booker = new User();
                $client_booker->name = $faker->userName();
                $client_booker->password = Hash::make("test");
                $client_booker->email = $faker->email();
                $client_booker->user_category()->associate($client_booker_role);
                $client_booker->company()->associate($company);
                $client_booker->save();
                $all_bookers[] = $client_booker;
            } */
    /* }; */

    /* $an_agency = null; */

    // for each agency
    /* foreach (range(0, 5) as $_) {

            $agency = new Agency();
            $agency->name = "Agency of " . $faker->city();
            $agency->save();

            $an_agency = $agency;

            foreach (range(0, 3) as $_) {
                $vehicle = new Vehicle;
                $vehicle->immatriculation = $faker->randomNumber(6, true);
                $vehicle->brand = $faker->company();
                $vehicle->model = $faker->word();
                $vehicle->booker()->associate($all_bookers[array_rand($all_bookers)]);
                $vehicle->agency()->associate($agency);

                $randomstatus = random_int(0, 4);
                if ($randomstatus == 0) {
                    $vehicle->status = "TOPREPARE";
                }
                if ($randomstatus == 1) {
                    $vehicle->status = "READYTOGO";
                }
                if ($randomstatus == 2) {
                    $vehicle->status = "GOCHECKED";
                }
                if ($randomstatus == 3) {
                    $vehicle->status = "RETURNCHECKED";
                }
                if ($randomstatus == 4) {
                    $vehicle->status = "NONE";
                };

                $vehicle->save();
            }
        } */



    /* // \App\Models\User::factory(10)->create();
        $user = new User();
        $user->name = "test seven admin";
        $user->password = Hash::make("test");
        $user->email = "sevenadminexample@example.org";
        $user->user_category()->associate($seven_admin_role);
        $user->save();

        $user = new User();
        $user->name = "test seven agent";
        $user->password = Hash::make("test");
        $user->email = "sevenagentexample@example.org";
        $user->user_category()->associate($seven_agent_role);
        $user->agency()->associate($an_agency);
        $user->save();

        $user = new User();
        $user->name = "test seven controller";
        $user->password = Hash::make("test");
        $user->email = "sevencontrollerexample@example.org";
        $user->user_category()->associate($seven_controller_role);
        $user->agency()->associate($an_agency);
        $user->save();

        $user = new User();
        $user->name = "test client booker";
        $user->password = Hash::make("test");
        $user->email = "clientbookerexample@example.org";
        $user->user_category()->associate($client_booker_role);
        $user->agency()->associate($an_agency);
        $user->save();

        $user = new User();
        $user->name = "test client admin";
        $user->password = Hash::make("test");
        $user->email = "clientadminexample@example.org";
        $user->user_category()->associate($client_admin_role);
        $user->agency()->associate($an_agency);
        $user->save();
    } */
}
