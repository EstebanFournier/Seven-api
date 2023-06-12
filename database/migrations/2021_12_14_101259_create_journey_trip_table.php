<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneyTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journey_trip', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('type', ['Aller simple', 'Aller retour']);
            $table->string('cityStart');
            $table->string('cityEnd');
            $table->datetime('dateStart');
            $table->datetime('dateEnd');
            $table->float('nbPassenger');
        });

        /*Schema::table('booking', function (Blueprint $table) {
            $table->foreignId("journey_trip_id")->references("id")->on("journey_trip");
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journey_trip');
    }
}
