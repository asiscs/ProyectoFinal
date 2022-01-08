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

        Juegos::create([
            'titulo' => $request->input('titulo'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
            'idUsuario' => Auth::user()->id,
            'ruta' => $entrada,
            'stock' => $request->input('stock'),
        ]);

       return redirect()->route('landing');

    }

    public function reservar($id) {

    	$idUsuario = Auth::user()->id;
    	$idJuego = $id;

    	$juego = Juegos::find($idJuego);

    	$juego->stock = $juego->stock - 1;

    	$juego->save();

    	$juego->users()->attach($idUsuario);

    	return redirect('/');

    }

    public function mostrarJuegos() {

    	$juegosMostrar = Juegos::all();

    	return view('verTodo1')->with('juegosMostrar', $juegosMostrar);

    }

    public function modificarDescripcion($id) {

    	$idJuego = $id;

    	return view('modDescView')->with('idJuego', $idJuego);

    }

    public function realizarUpdate(Request $request, $idJuego) {

    	$id = $idJuego;

    	$nuevaDesc = $request->input('descripcionNueva');

    	$juegoEsp = Juegos::find($id);

    	$juegoEsp->descripcion = $nuevaDesc;

    	$juegoEsp->save();

    	return redirect('/');

    }

    public function mostrarJuegosModificar() {

    	$juegosMostrar = Juegos::all();

    	return view('verTodo2')->with('juegosMostrar', $juegosMostrar);

    }

    public function mostrarJuegosLanding() {

    	$juegosMostrar = Juegos::all()->take(4);

    	$juegosMostrarAbajo = Juegos::orderBy('id', 'desc')->take(4)->get();

    	return view('landingPage')->with('juegosMostrar', $juegosMostrar)->with('juegosMostrarAbajo', $juegosMostrarAbajo);

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
