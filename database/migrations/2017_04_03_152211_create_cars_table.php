<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('air conditioner');
            $table->integer('number_of_seats');
            $table->integer('number_of_doors');
            $table->integer('number_of_passengers');
            $table->string('consumption');
            $table->boolean('gps');
            $table->string('transmission');
            $table->boolean('airbag');
            $table->boolean('abs');
            $table->date('year');
            $table->string('exteriror_color');
            $table->string('interior_color');
            $table->string('fuel');
            $table->string('engine');
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
        Schema::drop('cars');
    }
}
