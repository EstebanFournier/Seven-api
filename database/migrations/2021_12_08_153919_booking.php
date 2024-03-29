<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {

            $table->id();
            $table->string('number');
            $table->date('date');
            $table->date('dateStart');
            $table->date('dateEnd');
            $table->string('halfDayStart');
            $table->string('halfDayEnd');
            $table->string('status');
            $table->timestamps();

            $table->foreignId("driver_id")->references("id")->on("drivers");
            $table->foreignId("vehicle_id")->references("id")->on("vehicles");

            /*$table->id();
            $table->foreignId("booker_id")->nullable()->references("id")->on("users");
            $table->foreignId("vehicle_id")->nullable()->references("id")->on("vehicles");
            $table->foreignId("drivers_id")->nullable()->references("id")->on("drivers");
            $table->foreignId("returnTicket_id")->nullable()->references("id")->on("return_ticket");
            $table->timestamps();*/
        });
        /* Schema::table('return_ticket', function (Blueprint $table) {
            $table->foreignId("booking_id")->references("id")->on("booking");
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
