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

					<p id="primerTexto">¡Comparte tu experiencia con otros usuarios!</p>
				
					<a id="titulo" href="#div1"><h1>GAMESBLOG</h1></a>

					
					<div id="divPerfil">

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

			<div id="navbar" class="col-8">
				
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

			<section class="col-8">

				
				
				<div id="divNuevos container-fluid">

					<div id="divTop" class="row">

						<div id="DivTitulosReservar" class="row">
							
						<h6 id="tituloReservar" class="col-2">Reservar juegos</h6>

						<a class="col-2" href="{{ route('mostrarJuegos') }}"><input id="botonVer" type="submit" name="Vertodo" value="Ver todo"></a>

						</div>

					@foreach($juegosMostrar as $juego)

        		

					<div class="divPortadas col-3">

						<form method="POST" action="http://127.0.0.1:8000/relacionarJuegos/{{$juego->id}}" enctype="multipart/form-data">
						@csrf
							
						<img class="imagenesNuevos" src="images/{{$juego->ruta}}">

						<h7 class="titulos1">{{$juego->titulo}}</h7>

						<br>

						<input class="botonesComentar" type="submit" name="Reservar" value="Reservar">

						</form>

					</div>


				@endforeach

				</div>

			</div>

				<div id="divReserva">
				

					<div id="divTop" class="row">

						<div id="DivTitulosReservar" class="row">
							
						<h6 id="tituloReservar" class="col-3">Modificar descripción</h6>

						<a class="col-2" href="{{ route('mostrarJuegos') }}"><input id="botonVer2" type="submit" name="Vertodo" value="Ver todo"></a>

						</div>

					@foreach($juegosMostrar as $juego)

        		

					<div class="divPortadas col-3">

						<form method="POST" action="http://127.0.0.1:8000/relacionarJuegos/{{$juego->id}}" enctype="multipart/form-data">
						@csrf
							
						<img class="imagenesNuevos" src="images/{{$juego->ruta}}">

						<h7 class="titulos1">{{$juego->titulo}}</h7>

						<p class="descripcionJuego">{{ Str::limit($juego->descripcion, 50) }}</p>

						<input class="botonesModificar" type="submit" name="Modificar" value="Modificar">

						</form>

					</div>


				@endforeach

				</div>

				</div>

				<div id="divAñadir">
					
					<h3>Añadir</h3>

					<div id="divTextoAñadir">
						
						<p>En esta comunidad todos nos ayudamos entre todos, es por ello que para los usuarios registrados habilitamos un botón en el que se les permitirá añadir videojuegos para que otros usuarios le echen un vistazo.<br></p>

						<a href="{{ route('añadirJuegos') }}"><input id="botonAnadir" type="submit" name="anadir" value="AÑADIR"></a>

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