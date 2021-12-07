<?php

namespace Database\Seeders;

use App\Models\Regimen;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Regimen seeder
        Regimen::create([
            "nombre" =>'Pública'
        ]);
        Regimen::create([
            "nombre" =>'Privada'
        ]);
    }
}
