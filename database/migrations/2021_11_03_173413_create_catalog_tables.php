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
        Schema::create('areas_bachillerato', function (Blueprint $table) {
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
        Schema::create('planteles_areas', function (Blueprint $table) {
            $table->id();
            $table->string('plantel_id');
            $table->string('area_id');
            // $table->unsignedBigInteger('subsistema_id');
            $table->foreignId('plantel_id')->references('id')->on('planteles')->onDelete('restrict');
            $table->foreignId('area_id')->references('id')->on('areas_bachillerato')->onDelete('restrict');
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
        Schema::dropIfExists('areas_bachillerato');
        Schema::dropIfExists('planteles');
        Schema::dropIfExists('planteles_areas');
        Schema::dropIfExists('causas_baja');
        Schema::dropIfExists('modalidad_estudios');
        Schema::dropIfExists('modelos_educativos');
    }
}
