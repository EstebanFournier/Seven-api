<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlaceEnd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placeEnd', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('postalCode');
            $table->string('city');
            $table->timestamps();
        });
        Schema::table('booking', function (Blueprint $table) {
            $table->foreignId("placeEnd_id")->references("id")->on("placeEnd");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('placeEnd');
    }
}
