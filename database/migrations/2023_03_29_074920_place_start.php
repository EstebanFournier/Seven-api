<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlaceStart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placeStart', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('postalCode');
            $table->string('city');
            $table->timestamps();
        });
        Schema::table('booking', function (Blueprint $table) {
            $table->foreignId("placeStart_id")->references("id")->on("placeStart");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('placeStart_id');
    }
}
