<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
        });

        /*Schema::table('users', function (Blueprint $table) {
            $table->foreignId("agency_id")->nullable()->references("id")->on("agencies");
        });*/

        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreignId("agency_id")->references("id")->on("agencies");
        });

        /*Schema::table('booking', function (Blueprint $table) {
            $table->foreignId("agency_id")->references("id")->on("agencies");
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
}
