<?php

namespace Database\Seeders;

use App\Models\PlaceEnd;
use Illuminate\Database\Seeder;

class placeEndSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlaceEnd::factory(10)->create();
    }
}
