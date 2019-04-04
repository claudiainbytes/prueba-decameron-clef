<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionesHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones_hotel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hotel_id')->unsigned();
            $table->integer('tipo_habitacion_id')->unsigned()->index();
            $table->integer('tipo_acomodacion_id')->unsigned()->index();
            $table->integer('total_habitaciones');
            $table->timestamps();
            $table->foreign('hotel_id')
                  ->references('id')->on('hoteles')
                  ->onDelete('cascade');
            $table->foreign('tipo_habitacion_id')
                  ->references('id')->on('tipos_habitacion');
            $table->foreign('tipo_acomodacion_id')
                  ->references('id')->on('tipos_acomodacion');
            $table->unique(['hotel_id','tipo_habitacion_id', 'tipo_acomodacion_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones_hotel');
    }
}
