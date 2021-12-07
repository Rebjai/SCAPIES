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
            'modalidad' => 'Escolarizada'
        ]);
        DB::table('modalidad_estudios')->insert([
            'modalidad' => 'Escolarizada a distancia'
        ]);
        DB::table('modalidad_estudios')->insert([
            'modalidad' => 'Mixta'
        ]);
    }
}
