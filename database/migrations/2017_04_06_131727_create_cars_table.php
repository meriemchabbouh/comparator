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
            // to do nullable w -> default()
            $table->increments('id');
            $table->boolean('air_conditioner')->default(false);;
            $table->integer('number_of_seats')->nullable();
            $table->integer('number_of_doors')->nullable();
            $table->integer('number_of_passengers')->nullable();
            $table->string('consumption')->nullable();
            $table->boolean('gps')->default(false);;
            $table->string('transmission')->nullable();
            $table->boolean('airbag')->default(false);
            $table->boolean('abs')->default(false);;
            $table->date('year')->nullable();
            $table->string('exteriror_color')->nullable();
            $table->string('interior_color')->nullable();
            $table->string('fuel')->nullable();
            $table->string('engine')->nullable();
            $table->integer('price')->nullable();
    
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
