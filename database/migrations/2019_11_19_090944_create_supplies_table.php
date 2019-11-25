<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->unsignedBigInteger('lease_cost');
            $table->unsignedBigInteger('startup_cost');
            $table->text('description');
            $table->text('thumbnail');
            $table->boolean('in_stock');
            $table->unsignedBigInteger('roll_id');
            $table->timestamps();

            $table->foreign('roll_id')->references('id')->on('product_roll');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplies');
    }
}
