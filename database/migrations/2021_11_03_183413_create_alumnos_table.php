<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('datos_academicos', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('subsistema_id');
            $table->unsignedBigInteger('plantel_id');
            $table->unsignedBigInteger('campo_formacion_id');

            // $table->foreign('subsistema_id')->references('id')->on('subsistemas')->onDelete('cascade');
            $table->foreign('plantel_id')->references('id')->on('planteles')->onDelete('cascade');
            $table->foreign('campo_formacion_id')->references('id')->on('areas')->onDelete('cascade');
        });
        
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->boolean('genero')->nullable();
            $table->string('curp')->nullable();
            $table->string('correo');
            $table->string('telefono')->nullable();
            $table->unsignedBigInteger('direccion_id')->nullable();
            $table->unsignedBigInteger('datos_academicos_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('direccion_id')->references('id')->on('direcciones')->onDelete('restrict');
            $table->foreign('datos_academicos_id')->references('id')->on('datos_academicos')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
        Schema::dropIfExists('datos_academicos');
    }
}
