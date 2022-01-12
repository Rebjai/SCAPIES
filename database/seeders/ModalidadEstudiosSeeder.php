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
            'modalidad' => 'Escolarizada'
        ]);
        DB::table('modalidad_estudios')->insert([
            'id'=>2,
            'modalidad' => 'No Escolarizada'
        ]);
        DB::table('modalidad_estudios')->insert([
            'id'=>3,
            'modalidad' => 'Mixta'
        ]);
    }
}
