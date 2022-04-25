<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("lastName");
            $table->string("firstName");
            $table->String("street");
            $table->String("postalCode");
            $table->String("professionalEmail");
            $table->String("mobileNumber")->nullable();
            $table->String("drivingLicenseNumber");
            $table->foreignId("company_id")->references("id")->on("companies");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
