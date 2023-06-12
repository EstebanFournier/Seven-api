<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RestituedCarForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RestituedCarForm', function (Blueprint $table) {
            $table->id();
            $table->integer('mileage');
            $table->date('date');
            $table->enum('frontLeftWing', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('frontRightWing', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('leftRearWing', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('rightRearWing', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('radiator', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('frontLeftLightHouse', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('frontRightLightHouse', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('seat', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('passengerSeat', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('dashboard', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('frontLeftDoor', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('frontRightDoor', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('leftRearDoor', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('rightRearDoor', ['RS', 'RP', 'EC'])->nullable();
            $table->enum('observations', ['RS', 'RP', 'EC'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RestituedCarForm');
    }
}
