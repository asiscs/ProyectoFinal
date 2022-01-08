<!DOCTYPE html>
<html>
<head>
	<title>Landing page</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	

	<style type="text/css">
		
		body {
		  background-image: url("images/fifa22.jpg");
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-size: cover;
		}


	</style>

</head>
<body>
	
	<div id="div1" class="container-fluid">

		<div id="divHeader" class="row">
			<header class="col-12">

					<p class="col-xl-1 col-md-2" id="primerTexto">¡Comparte tu experiencia con otros usuarios!</p>
				
					<a id="titulo" href="#div1"><img id="logo" src="images/logo.png"></a>

					
					<div class="col-xl-1 col-md-2" id="divPerfil">

					@if (Auth::guest())

						<a href="{{ route('loginFoto') }}"><img id="imagenPerfil" src="images/perfil.png"></a>

				    @else

				    	<a id="username" href="#">{{ Auth::user()->name }}</a>
				    	<a id="logout" href="{{ url('/logout') }}"> Cerrar sesion </a>

				    @endif

						

					</div>

			</header>
		</div>

		<div id="sectionDiv" class="row divSecciones">

			<div id="navbar" class="col-xl-8 col-md-10">
				
				<ul id="navUl">
					
					<li class="navItems"><a href="#divNuevos">Reservar</a></li>
					<li class="navItems"><a href="#divReserva">Modificar</a></li>
					<li class="navItems"><a href="#divAñadir">Añadir</a></li>
					@if (Auth::check())
					@if (Auth::User()->role == 1)
					<li class="navItems"><a href="/adminPanel">Panel Administrador</a></li>
					@endif
					@endif
					@if (Auth::check())
					@if (Auth::User()->role == 2)
					<li class="navItems"><a href="/reservasPanel">Panel Reservas</a></li>
					@endif
					@endif



				</ul>

			</div>

			<section class="col-xl-8 col-md-10">

				
				
				<div id="divNuevos container-fluid">

					<div id="divTop" class="row">

						<div id="DivTitulosReservar" class="row">
							
						<h6 id="tituloReservar" class="col-xl-2 col-md-4">Reservar juegos</h6>

						<a class="col-xl-2 col-md-4" href="{{ route('mostrarJuegos') }}"><input id="botonVer" type="submit" name="Vertodo" value="Ver todo"></a>

						</div>

					@foreach($juegosMostrar as $juego)

        		

					<div class="divPortadas col-xl-3 col-md-5 mb-md-4">

						<form method="POST" action="{{ route('relacionarJuegos', $juego->id ) }}" enctype="multipart/form-data">
						@csrf
							
						<img class="imagenesNuevos" src="images/{{$juego->ruta}}">

						<h7 class="titulos1">{{$juego->titulo}}</h7>

						<br>

						@if($juego->stock == 0)

						<span id="textoStock">FUERA DE STOCK</span>

						@else

						<input class="botonesComentar" type="submit" name="Reservar" value="Reservar">

						@endif

						</form>

					</div>


				@endforeach

				</div>

			</div>

				<div id="divReserva">
				

					<div id="divTop" class="row">

						<div id="DivTitulosReservar" class="row">
							
						<h6 id="tituloReservar" class="col-xl-2 col-md-5">Modificar descripción</h6>

						<a class="col-xl-2 col-md-4" href="{{ route('mostrarJuegosModificar') }}"><input id="botonVer2" type="submit" name="Vertodo" value="Ver todo"></a>

					</div>

					@foreach($juegosMostrarAbajo as $juego)

					<div class="divPortadas col-xl-3 col-md-5 mb-md-4">
							
						<img class="imagenesNuevos" src="images/{{$juego->ruta}}">

						<h7 class="titulos1">{{$juego->titulo}}</h7>

						<p class="descripcionJuego">{{ Str::limit($juego->descripcion, 50) }}</p>

						<a class="col-xl-1 col-md-2" href="{{ route('modificarDescripcion', $juego->id ) }}"><input class="botonMod" type="submit" name="Modificar" value="Modificar"></a>

					</div>


				@endforeach

				</div>

				</div>

				<div id="divAñadir">

					<div id="divTextoAñadir">

						<h3>Añadir</h3>
						
						<p id="parrafoAñadir">En esta comunidad todos nos ayudamos entre todos, es por ello que para los usuarios registrados habilitamos un botón en el que se les permitirá añadir videojuegos para que otros usuarios le echen un vistazo.<br></p>

						<a href="{{ route('añadirJuegos') }}"><input id="botonAnadir" type="submit" name="anadir" value="AÑADIR"></a>

					</div>

					<div id="divImagenGrupo">
						
						<img id="imagenGrupo" src="images/grupo.jpg">

					</div>

				</div>

			</section>
		</div>

		<div class="row divSecciones">
			<footer class="col-12">

				<p>Redes sociales</p>

				<img class="logos" src="images/instagram.png" href="">
				<img class="logos" src="images/twitter.png">

				<p>Copyright © 2021 GamesBlog</p>
				

			</footer>
		</div>


	</div>	
	


</body>
</html>