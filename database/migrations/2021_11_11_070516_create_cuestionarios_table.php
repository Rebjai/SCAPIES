<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionario_opciones_carreras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('carrera_id')->nullable()->references('id')->on('carreras')->onDelete('restrict');
            $table->string('carrera_no_registrada');
            $table->boolean('principal');
        });
        Schema::create('baja_alumnos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('causa_baja_id')->references('id')->on('causas_baja')->onDelete('restrict');
            $table->boolean('apoyo_economico');
            $table->string('otra_causa')->nullable();
            $table->timestamps();
        });
        Schema::create('cuestionarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('alumno_id')->unique()->references('id')->on('alumnos')->onDelete('restrict');
            $table->foreignId('modalidad_estudios_id')->nullable()->references('id')->on('modalidad_estudios')->onDelete('restrict');
            $table->foreignId('baja_id')->nullable()->references('id')->on('baja_alumnos')->onDelete('restrict');
            $table->integer('mes')->nullable();
            $table->boolean('folleto_impreso')->nullable();
            $table->boolean('aviso_privacidad');
            $table->boolean('continuar_estudios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuestionarios');
        Schema::dropIfExists('cuestionario_opciones_carreras');
        Schema::dropIfExists('baja_alumnos');
    }
}
