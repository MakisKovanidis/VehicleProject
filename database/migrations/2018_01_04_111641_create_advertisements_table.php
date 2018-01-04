<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->smallInteger('month');
            $table->bigInteger('kilometers');
            $table->boolean('alarm_system')->default(false);
            $table->boolean('aluminium_wheels')->default(false);
            $table->boolean('multimedia_system')->default(false);
            $table->boolean('fog_lights')->default(false);
            $table->boolean('abs')->default(false);
            $table->boolean('esp')->default(false);
            $table->boolean('parking_system')->default(false);
            $table->smallInteger('wheels_size');
            $table->longText('description')->nullable();
            $table->float('price')->nullable();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('advertisements');
    }
}
