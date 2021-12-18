<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert( [
            ['name' => 'Asís', 'email' => 'asiscs.ac@gmail.com', 'role' => '1', 'password' => bcrypt('password123')],
            ['name' => 'Juan', 'email' => 'ejemplo1@gmail.com', 'role' => '2', 'password' => bcrypt('password123')],
            ['name' => 'Unai', 'email' => 'ejemplo2@gmail.com', 'role' => '2', 'password' => bcrypt('password123')],
            ['name' => 'Iñigo', 'email' => 'ejemplo3@gmail.com', 'role' => '2', 'password' => bcrypt('password123')],
        ]);

    }
}
