<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsistemas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
        });
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('area_bachillerato');
        });
        Schema::create('planteles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('clave');
            // $table->unsignedBigInteger('subsistema_id');
            $table->foreignId('subsistema_id')->references('id')->on('subsistemas')->onDelete('restrict');
            
        });
        Schema::create('area_plantel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plantel_id');
            $table->unsignedBigInteger('area_id');
            // $table->unsignedBigInteger('subsistema_id');
            $table->foreign('plantel_id')->references('id')->on('planteles')->onDelete('restrict');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('restrict');
        });
        
        Schema::create('causas_baja', function (Blueprint $table) {
            $table->id();
            $table->string('causa');
        });
        Schema::create('modalidad_estudios', function (Blueprint $table) {
            $table->id();
            $table->string('modalidad');
        });
        Schema::create('modelos_educativos', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subsistemas');
        Schema::dropIfExists('areas');
        Schema::dropIfExists('planteles');
        Schema::dropIfExists('area_plantel');
        Schema::dropIfExists('causas_baja');
        Schema::dropIfExists('modalidad_estudios');
        Schema::dropIfExists('modelos_educativos');
    }
}
