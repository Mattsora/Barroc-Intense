<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeaseContracts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lease_contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('lease_type');
            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('lease_type')->references('id')->on('lease_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lease_contracts');
    }
}
