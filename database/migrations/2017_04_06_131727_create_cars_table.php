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
            $table->boolean('air_conditioner');
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

            $table->integer('car_model_id')->unsigned();
            $table->foreign('car_model_id')->references('id')->on('car_models')->onDelete('cascade');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->integer('type_car_id')->unsigned();
            $table->foreign('type_car_id')->references('id')->on('type_cars')->onDelete('cascade');
            $table->integer('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
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
