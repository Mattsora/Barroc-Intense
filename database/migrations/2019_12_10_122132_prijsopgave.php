<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prijsopgave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('prijsopgaves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('supply_id');
            $table->unsignedBigInteger('supply_id1');
            $table->unsignedBigInteger('supply_id2');
            $table->unsignedBigInteger('count');
            $table->unsignedBigInteger('count1');
            $table->unsignedBigInteger('count2');
            $table->foreign('supply_id')->references('id')->on('supplies');
            $table->foreign('customer_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('prijsopgave');
    }
}
