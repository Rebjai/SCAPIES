<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalidadEstudiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modalidad_estudios')->insert([
            'id'=>1,
            'modalidad' => 'Escolarizada',
            'descripcion' => 'Se caracteriza por la presencia de estudiantes y profesores en las aulas y espacios extraescolares de la escuela en horarios de clase previamente programados.'
        ]);
        DB::table('modalidad_estudios')->insert([
            'id'=>2,
            'modalidad' => 'No Escolarizada',
            'descripcion' => 'Tiene la ventaja de no asistir a clases en lugares y horarios definidos.'
        ]);
        DB::table('modalidad_estudios')->insert([
            'id'=>3,
            'modalidad' => 'Mixta',
            'descripcion' => 'Se caracteriza porque la impartición de clases se lleva a cabo de manera presencial y virtual utilizando tecnologías de la información y la comunicación.'
        ]);
    }
}
