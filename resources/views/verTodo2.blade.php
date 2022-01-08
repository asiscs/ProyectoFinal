<!DOCTYPE html>
<html>
<head>
    <title>Añadir Juegos</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/reservas.css') }}">
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
                            
                                <a id="titulo" href="{{ route('landing') }}"><img id="logo" src="images/logo.png"></a>

                                
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

        <section class="col-xl-8 col-md-10">

        	<div id="divNuevos container-fluid">

                <div id="divBot" class="row">

        		@foreach($juegosMostrar as $juego)

					<div class="divPortadas col-xl-3 col-md-6">
							
						<img class="imagenesNuevos" src="images/{{$juego->ruta}}">

						<h7 class="titulos1">{{$juego->titulo}}</h7>

						<p class="descripcionJuego">{{ Str::limit($juego->descripcion, 50) }}</p>

						<a class="col-2" href="{{ route('modificarDescripcion', $juego->id ) }}"><input class="botonMod" type="submit" name="Modificar" value="Modificar"></a>

				</div>

				@endforeach

                </div>

        	</div>


        </section>

        <div class="row divSecciones">
                <footer class="col-12">

                        <p>Redes sociales</p>

	                    <img class="logos" src="images/instagram.png" href="">
	                    <img class="logos" src="images/twitter.png">

                    	<p>Copyright © 2021 GamesBlog</p>
                                    

                </footer>
        </div>
</body>
</html>