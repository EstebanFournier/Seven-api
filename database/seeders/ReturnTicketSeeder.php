<?php

namespace Database\Seeders;

use App\Models\ReturnTicket;
use Illuminate\Database\Seeder;

class ReturnTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReturnTicket::factory(15)->create();
    }
}
