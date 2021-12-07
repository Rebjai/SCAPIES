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
        // Seed admin and defauld users
        $this->call([
            UserSeeder::class,
        ]);
        // bachillerato dependencies seeder
        $this->call([
            BachilleratoAreasSeeder::class,
            SubsistemaSeeder::class,
            PlantelesSeeder::class,
        ]);
        // Questionaire dependencies seeder
        $this->call([
            CausasBajasSeeder::class,
        ]);
        // Universidad dependencies seeder
        $this->call([
            UniversidadSubsistemaSeeder::class,
        ]);
    }
}
