<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrijsopgavenRules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prijsopgaves_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('supply_id');
            $table->unsignedBigInteger('prijsopgaven_id');
            $table->unsignedBigInteger('amount');
            $table->foreign('supply_id')->references('id')->on('supplies');
            $table->foreign('prijsopgaven_id')->references('id')->on('prijsopgaves');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prijsopgaves_rules');
    }
}
