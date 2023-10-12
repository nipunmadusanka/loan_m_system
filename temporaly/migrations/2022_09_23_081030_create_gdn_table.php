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
        Schema::create('gdn', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('issuedLocationID');
            $table->foreign('issuedLocationID')->references('locationID')->on('location');

            $table->unsignedBigInteger('dispatchLocation');
            $table->foreign('dispatchLocation')->references('locationID')->on('location');

            $table->string('note');
            $table->timestamps();
            $table->string('status')->default('enable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gdn');
    }
};
