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
            ['titulo' => 'Farcry6', 'precio' => '60', 'ruta' => 'farcryPortada.jpg', 'descripcion' => 'Juego de accion', 'idUsuario' => 1 ,'stock' => '20'],
            ['titulo' => 'FIFA22', 'precio' => '60', 'ruta' => 'fifa-22Portada.jpg', 'descripcion' => 'Juego de futbol', 'idUsuario' => 1, 'stock' => '20'],
            ['titulo' => 'Battlefield 42', 'precio' => '45', 'ruta' => 'battlefieldPortada.jpg', 'descripcion' => 'Juego de accion', 'idUsuario' => 1, 'stock' => '20'],
            ['titulo' => 'All Star Brawl', 'precio' => '40', 'ruta' => 'bobPortada.jpg',  'descripcion' => 'Juego de accion y dibujos animados', 'idUsuario' => 1, 'stock' => '20'],
            ['titulo' => 'Farming Simulator', 'precio' => '30', 'ruta' => 'farming.jpg', 'descripcion' => 'Juego de simulacion y agricultura', 'idUsuario' => 1, 'stock' => '20'],
            ['titulo' => 'Back4Blood', 'precio' => '50', 'ruta' => 'back4blood.jpg', 'descripcion' => 'Juego de zombies y disparos', 'idUsuario' => 1, 'stock' => '20'],
            ['titulo' => 'Forza Horizon 5', 'precio' => '55', 'ruta' => 'forzaHorizon.jpg', 'descripcion' => 'Juego de carreas y coches', 'idUsuario' => 1, 'stock' => '20'],
            ['titulo' => 'Elden Ring', 'precio' => '40', 'ruta' => 'eldenRing.jpg', 'descripcion' => 'Juego de aventura, accion y fantastico', 'idUsuario' => 1, 'stock' => '20'],
            ['titulo' => 'Skyrim', 'precio' => '20', 'ruta' => 'skyrim.jpg', 'descripcion' => 'Juego de aventura y monstruos', 'idUsuario' => 1, 'stock' => '20'],
            ['titulo' => 'Monster Hunter Rise', 'precio' => '38', 'ruta' => 'monster.jpg', 'descripcion' => 'Juego de accion y aventura mapa abierto', 'idUsuario' => 1, 'stock' => '20'],
        ]);


    }
}
