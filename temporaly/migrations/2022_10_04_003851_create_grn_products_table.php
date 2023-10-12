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
        Schema::create('grn_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grnID');
            $table->unsignedBigInteger('productID');
            $table->unsignedBigInteger('brandID');
            $table->string('quantity');
            $table->timestamps();
            $table->date('mfd');
            $table->date('exd');
            $table->string('status')->default('enable');


            $table->foreign('grnID')->references('id')->on('grn');
            $table->foreign('productID')->references('id')->on('products');
            $table->foreign('brandID')->references('brandID')->on('brand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grn_products');
    }
};
