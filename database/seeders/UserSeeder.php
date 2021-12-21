<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Coepes',
            'email' => 'admin@coepesoaxaca.com',
            'password' => Hash::make('admin123'),
            'admin' => true
        ]);
    }
}
