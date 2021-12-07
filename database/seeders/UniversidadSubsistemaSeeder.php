<?php

namespace Database\Seeders;

use App\Models\UniversidadSubsistema;
use Illuminate\Database\Seeder;

class UniversidadSubsistemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UniversidadSubsistema::create([
            'nombre'=> 'Universidad Particular'
        ]);
        UniversidadSubsistema::create([
            'nombre'=> 'UABJO'
        ]);
        UniversidadSubsistema::create([
            'nombre'=> 'Instituto Politécnico Nacional'
        ]);
        UniversidadSubsistema::create([
            'nombre'=> 'Tecnológico Federal'
        ]);
        UniversidadSubsistema::create([
            'nombre'=> 'Tecnológico Particular'
        ]);
        UniversidadSubsistema::create([
            'nombre'=> 'Tecnológico Estatal'
        ]);
        UniversidadSubsistema::create([
            'nombre'=> 'SUNEO'
        ]);
        UniversidadSubsistema::create([
            'nombre'=> 'CSEIIO'
        ]);
        UniversidadSubsistema::create([
            'nombre'=> 'Universidad Pedagógica Nacional'
        ]);
        UniversidadSubsistema::create([
            'nombre'=> 'Universidades Politécnicas'
        ]);
        UniversidadSubsistema::create([
            'nombre'=> 'Universidad Tecnológica'
        ]);
    }
}
