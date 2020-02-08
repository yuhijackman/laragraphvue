<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('amount')->unsigned()->nullable(false);
            $table->integer('food_id')->unsigned()->nullable(false);
            $table->bigInteger('ferret_id')->unsigned()->nullable(false);
            $table->dateTime('feeding_time')->nullable(false);
            $table->foreign('ferret_id')->references('id')->on('ferrets')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_records');
    }
}
