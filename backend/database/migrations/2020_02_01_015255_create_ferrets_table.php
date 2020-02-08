<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFerretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferrets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('birthdate');
            $table->string('thumbnail')->nullable();
            $table->decimal('weight', 4, 1)->nullable();
            $table->integer('height')->unsigned()->nullable();
            $table->tinyInteger('type')->unsigned()->nullable();
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ferrets');
    }
}
