<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CausasBajasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('causas_baja')->insert([
            'causa' => 'Problemas económicos'
        ]);
        DB::table('causas_baja')->insert([
            'causa' => 'Problemas familiares'
        ]);
        DB::table('causas_baja')->insert([
            'causa' => 'No me interesa estudiar'
        ]);
        DB::table('causas_baja')->insert([
            'causa' => 'Problemas escolares'
        ]);
        DB::table('causas_baja')->insert([
            'causa' => 'Emigraré a otro estado / país'
        ]);
        DB::table('causas_baja')->insert([
            'causa' => 'Otra'
        ]);

    }
}
