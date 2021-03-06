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
        Schema::create('regimenes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');

        });
        Schema::create('universidad_subsistemas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
        });
        Schema::create('universidades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('siglas')->nullable();
            $table->string('nombre');
            $table->string('lema')->nullable();
            $table->foreignId('regimen_id')->references('id')->on('regimenes')->restrictOnDelete();
            $table->foreignId('modalidad_id')->nullable()->references('id')->on('modalidad_estudios')->restrictOnDelete();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('pagina')->nullable();
            $table->foreignId('universidad_subsistema_id')->nullable()->references('id')->on('universidad_subsistemas')->restrictOnDelete();
            $table->foreignId('direccion_id')->nullable()->references('id')->on('direcciones')->restrictOnDelete();
        });
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('universidad_id')->references('id')->on('universidades')->onDelete('restrict');
            $table->foreignId('modalidad_estudio_id')->nullable()->references('id')->on('modalidad_estudios')->onDelete('restrict');
            $table->string('carrera');
            $table->string('capacidad')->nullable();
            $table->string('duracion')->nullable();

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
        Schema::dropIfExists('universidad_subsistemas');
        Schema::dropIfExists('regimenes');
    }
}
