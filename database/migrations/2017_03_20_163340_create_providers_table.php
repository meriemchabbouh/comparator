<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->text('description');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('public_email');
            $table->string('link_fb');
            $table->string('link_instagram');
            $table->string('link_website');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
          ////  $table->integer('governorate_id')->unsigned();
           // $table->foreign('governorate_id')->references('id')->on('governorates');


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
        Schema::dropIfExists('providers');
    }
}
