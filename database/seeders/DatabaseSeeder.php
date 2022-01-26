<?php

namespace Database\Seeders;

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
        // Seed admin and default users
        $this->call([
            UserSeeder::class,
        ]);
        // Regimen seeder
        $this->call([
            RegimenesSeeder::class
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
            ModalidadEstudiosSeeder::class,
            UniversitiesSeeder::class,
            CarreraUniversidadSeeder::class
        ]);
    }
}
