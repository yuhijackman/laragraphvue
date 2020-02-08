<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('consistency')->unsigned()->nullable(false);
            $table->tinyInteger('color')->unsigned()->nullable(false);
            $table->bigInteger('ferret_id')->unsigned()->nullable(false);
            $table->date('date')->nullable(false);
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
        Schema::dropIfExists('poops');
    }
}
