<?php

namespace Database\Seeders;

use App\Models\Bachillerato\Area;
use Illuminate\Database\Seeder;

class BachilleratoAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            "nombre"=>"ADMINISTRACIÓN Y NEGOCIOS"
        ]);
        Area::create([
            "nombre"=>"AGRONOMÍA Y VETERINARIA"
        ]);
        Area::create([
            "nombre"=>"ARTES Y HUMANIDADES"
        ]);
        Area::create([
            "nombre"=>"CIENCIAS DE LA SALUD"
        ]);
        Area::create([
            "nombre"=>"CIENCIAS NATURALES, MATEMÁTICAS Y ESTADÍSTICA"
        ]);
        Area::create([
            "nombre"=>"CIENCIAS SOCIALES Y DERECHO"
        ]);
        Area::create([
            "nombre"=>"COMPONENTE BÁSICO INICIAL ( BACHILLERATO GENERAL )"
        ]);
        Area::create([
            "nombre"=>"EDUCACIÓN"
        ]);
        Area::create([
            "nombre"=>"INGENIERÍA, MANUFACTURA Y CONSTRUCCIÓN"
        ]);
        Area::create([
            "nombre"=>"TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN"
        ]);
    }
}
