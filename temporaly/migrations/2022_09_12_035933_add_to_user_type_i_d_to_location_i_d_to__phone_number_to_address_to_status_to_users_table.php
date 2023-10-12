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
        Schema::table('users', function (Blueprint $table) {
            $table->after('id', function ($table) {
                $table->integer('userTypeID');
                $table->integer('locationID');
            });
            $table->after('email', function ($table) {
                $table->string('phoneNumber');
            });
            $table->after('updated_at', function ($table) {
                $table->string('status')->default('enable');;
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('userTypeID');
            $table->dropColumn('locationID');
            $table->dropColumn('phoneNumber');
            $table->dropColumn('address');
            $table->dropColumn('status');
        });
    }
};
