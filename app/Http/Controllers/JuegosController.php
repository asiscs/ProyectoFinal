<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juegos;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Storage;
use Illuminate\Support\Str;


class JuegosController extends Controller
{
    
	protected function create(Request $request)
    {

    	/*$entrada=$request->all();

        if($archivo=$request->file('portada')) {

        	$nombre=$archivo->getClientOriginalName();

        	$archivo->move('images', $nombre);

        	$entrada['ruta']=$nombre;


        }*/

        /*$imagenes = $request->file('portada')->store('public/images');

        $entrada = Storage::url($imagenes);*/

	        $entrada = $request->file('portada')->getClientOriginalName();
	        $request->file('portada')->move('images', $entrada);

        return Juegos::create([
            'titulo' => $request->input('titulo'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
            'idUsuario' => Auth::user()->id,
            'ruta' => $entrada,
        ]);



       return redirect()->route('landing');

    }

    public function reservar($id) {

    	$idUsuario = Auth::user()->id;
    	$idJuego = $id;

    	$juego = Juegos::find($idJuego);

    	$juego->users()->attach($idUsuario);

    	return redirect('/');

    }

    public function mostrarJuegos() {

    	$juegosMostrar = Juegos::all();

    	return view('prueba1')->with('juegosMostrar', $juegosMostrar);

    }

    public function mostrarJuegosLanding() {

    	$juegosMostrar = Juegos::all();

    	return view('landingPage')->with('juegosMostrar', $juegosMostrar);

    }

    public function adminPanel() {

    	$todosUsuarios = User::all();

    	return view('panelAdmin')->with('todosUsuarios', $todosUsuarios);

    }

    public function ReservasPanel() {

    	$idUsuario = Auth::user()->id;

    	$todosJuegos = User::find($idUsuario)->juego;

    	return view('panelReservas')->with('todosJuegos', $todosJuegos);

    }

    public function eliminarUsuarios($id) {

    	$usuario = User::find($id);
        
        $usuario->delete();
        return redirect()->route('adminPanel');

    }

}
