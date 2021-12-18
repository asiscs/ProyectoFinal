<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Juegos;
use Illuminate\Support\Facades\DB;

class JuegosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('juegos')->insert( [
            ['titulo' => 'Farcry6', 'precio' => '60', 'ruta' => 'farcryPortada.jpg', 'descripcion' => 'Juego de accion', 'idUsuario' => 1],
            ['titulo' => 'FIFA22', 'precio' => '60', 'ruta' => 'fifa-22Portada.jpg', 'descripcion' => 'Juego de futbol', 'idUsuario' => 1],
            ['titulo' => 'Battlefield 42', 'precio' => '45', 'ruta' => 'battlefieldPortada.jpg', 'descripcion' => 'Juego de accion', 'idUsuario' => 1],
            ['titulo' => 'All Star Brawl', 'precio' => '40', 'ruta' => 'bobPortada.jpg', 'descripcion' => 'Juego de accion y dibujos animados', 'idUsuario' => 1],
        ]);


    }
}
