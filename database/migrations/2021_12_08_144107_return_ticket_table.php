<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReturnTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_ticket', function (Blueprint $table) {
            $table->id();
            $table->foreignId("userCreator_id")->nullable()->references("id")->on("users");
            $table->string("vehicleModel");
            $table->string("vehicleMatriculation");
            $table->unsignedBigInteger("mileage");
            $table->datetime("dateHourControl");
            $table->enum("aileAVG", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("aileARG", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("calandre", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("phareAVD", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("siegePass", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("porteAVG", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("aileAVD", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("aileARD", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("phareAVG", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("siegeCond", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("tdb", ['RS', 'RP', 'EC'])->nullable();
            $table->enum("porteAVD", ['RS', 'RP', 'EC'])->nullable();
            $table->string("observation")->nullable();
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
        Schema::dropIfExists('return_ticket');
    }
}
