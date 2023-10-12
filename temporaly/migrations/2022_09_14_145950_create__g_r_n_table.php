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
        Schema::create('GRN', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SupplierID');
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('locationID');
            $table->string('note');
            $table->timestamps();
            $table->string('status')->default('enable');

            $table->foreign('supplierID')->references('supplierID')->on('supplier');
            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('locationID')->references('locationID')->on('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GRN');
    }
};
