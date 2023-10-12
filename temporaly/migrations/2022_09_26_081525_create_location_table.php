<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->id('locationID');
            $table->string('locationName')->nullable();
            $table->unsignedBigInteger('locationTypeID');
            $table->timestamps();
            $table->string('status')->default('enable');

            $table->foreign('locationTypeID')->references('locationTypeID')->on('location_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location');
    }
};
