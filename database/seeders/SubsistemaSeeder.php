<?php

namespace Database\Seeders;

use App\Models\Plantel\Subsistema;
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
            'nombre' => 'IEBO'
        ]);



        Subsistema::create([
            'id' => 2,
            'nombre' => 'CECYTE'
        ]);



        Subsistema::create([
            'id' => 3,
            'nombre' => 'EMSAD'
        ]);



        Subsistema::create([
            'id' => 4,
            'nombre' => 'DGETI'
        ]);



        Subsistema::create([
            'id' => 5,
            'nombre' => 'CSEIIO'
        ]);



        Subsistema::create([
            'id' => 6,
            'nombre' => 'UABJO'
        ]);



        Subsistema::create([
            'id' => 7,
            'nombre' => 'CENTRO DE ESTUDIOS DE BACHILLERATO'
        ]);



        Subsistema::create([
            'id' => 8,
            'nombre' => 'CONALEP'
        ]);



        Subsistema::create([
            'id' => 9,
            'nombre' => 'DGETA'
        ]);



        Subsistema::create([
            'id' => 10,
            'nombre' => 'COBAO'
        ]);



        Subsistema::create([
            'id' => 11,
            'nombre' => 'TBCEO'
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
            'nombre' => 'CETMAR'
        ]);



        Subsistema::create([
            'id' => 27,
            'nombre' => 'PREFECO'
        ]);
    }
}
