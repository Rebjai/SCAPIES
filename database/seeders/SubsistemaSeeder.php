<?php

namespace Database\Seeders;

use App\Models\Bachillerato\Subsistema;
use Illuminate\Database\Seeder;

class SubsistemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subsistema::create([
            'id' => 1,
            'nombre' => 'INSTITUTO DE ESTUDIOS DE BACHILLERATO DEL ESTADO DE OAXACA (IEBO)'
        ]);



        Subsistema::create([
            'id' => 2,
            'nombre' => 'COLEGIO DE ESTUDIOS CIENTÍFICOS Y TECNOLÓGICOS (CECYTE)'
        ]);



        Subsistema::create([
            'id' => 3,
            'nombre' => 'EDUCACIÓN MEDIA SUPERIOR A DISTANCIA (EMSAD)'
        ]);



        Subsistema::create([
            'id' => 4,
            'nombre' => 'DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA INDUSTRIAL (DGETI)'
        ]);



        Subsistema::create([
            'id' => 5,
            'nombre' => 'COLEGIO SUPERIOR PARA LA EDUCACIÓN INTEGRAL INTERCULTURAL DE OAXACA (CSEIIO)'
        ]);



        Subsistema::create([
            'id' => 6,
            'nombre' => 'UNIVERSIDAD AUTÓNOMA BENITO JUÁREZ DE OAXACA (UABJO)'
        ]);



        Subsistema::create([
            'id' => 7,
            'nombre' => 'CENTRO DE ESTUDIOS DE BACHILLERATO (CEB)'
        ]);



        Subsistema::create([
            'id' => 8,
            'nombre' => 'COLEGIO NACIONAL DE EDUCACIÓN PROFESIONAL TÉCNICA (CONALEP)'
        ]);



        Subsistema::create([
            'id' => 9,
            'nombre' => 'DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA AGROPECUARÍA (DGETA)'
        ]);



        Subsistema::create([
            'id' => 10,
            'nombre' => 'COLEGIO DE BACHILLERES DEL ESTADO DE OAXACA (COBAO)'
        ]);



        Subsistema::create([
            'id' => 11,
            'nombre' => 'TELEBACHILLERATO COMUNITARIO DEL ESTADO DE OAXACA (TBCEO)'
        ]);



        Subsistema::create([
            'id' => 12,
            'nombre' => 'PREPARATORIA ABIERTA'
        ]);



        Subsistema::create([
            'id' => 13,
            'nombre' => 'BACHILLERATO PARTICULAR'
        ]);



        Subsistema::create([
            'id' => 28,
            'nombre' => 'OTRA'
        ]);



        Subsistema::create([
            'id' => 14,
            'nombre' => 'CENTRO DE ESTUDIOS TECNOLÓGICOS DEL MAR (CETMAR)'
        ]);

        Subsistema::create([
            'id' => 15,
            'nombre' => 'CENTRO DE EDUCACIÓN ARTÍSTICA (CEDART)'
        ]);


        Subsistema::create([
            'id' => 27,
            'nombre' => 'PREPARATORIA FEDERAL POR COOPERACIÓN (PREFECO)'
        ]);
    }
}
