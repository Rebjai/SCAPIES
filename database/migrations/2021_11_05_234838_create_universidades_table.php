<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universidades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('lema');
            $table->string('tipo');
            $table->foreignId('modalidad_id')->references('id')->on('modalidad_estudios')->restrictOnDelete();
            $table->string('telefono');
            $table->string('email');
            $table->string('facebook');
            $table->string('pagina');
            $table->foreignId('direccion_id')->references('id')->on('direcciones')->restrictOnDelete();
        });
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('universidad_id')->references('id')->on('universidades')->onDelete('restrict');
            $table->string('carrera');
            $table->string('capacidad');
            $table->string('duracion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carreras');
        Schema::dropIfExists('universidades');
    }
}
