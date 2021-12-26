<?php

namespace Database\Seeders;

use App\Models\Regimen;
use Illuminate\Database\Seeder;

class RegimenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Regimen::create([
            "nombre" =>'Pública'
        ]);
        Regimen::create([
            "nombre" =>'Privada'
        ]);
    }
}
