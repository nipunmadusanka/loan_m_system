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
        Schema::create('privilage_has_user_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('privilages_id');
            $table->unsignedBigInteger('user_type_id');
            $table->integer('status')->default('1');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('privilages_id')->references('id')->on('privilages');
            $table->foreign('user_type_id')->references('id')->on('user_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privilage_has_user_types');
    }
};
