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
        });
        Schema::create('baja_alumnos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('cuestionarios', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('cuestionarios');
        Schema::dropIfExists('cuestionario_opciones_carreras');
        Schema::dropIfExists('baja_alumnos');
    }
}
