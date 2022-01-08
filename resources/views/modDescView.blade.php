<!DOCTYPE html>
<html>
<head>
	<title>ModView</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/añadir.css') }}">
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

                        <div class="container" id="login">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">{{ __('Modificar Descripción') }}</div>

                                        @if (Auth::guest())

                                        <p id="parrafoMod">Debes iniciar sesion antes de poder modificar la descripción de un juego</p>

                                        @else

                                        <div class="card-body">
                                            <form method="POST" action="{{ route('realizarUpdate', $idJuego ) }}" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="descripcionNueva" class="col-md-4 col-form-label text-md-right">{{ __('Nueva descripción') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="descripcionNueva" type="descripcionNueva" class="form-control @error('descripcionNueva') is-invalid @enderror" name="descripcionNueva" value="{{ old('descripcionNueva') }}" required autocomplete="descripcionNueva" autofocus>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button id="botonModFinal" type="submit" class="btn btn-primary">
                                                            {{ __('Modificar') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        @endif

                                    </div>
                                </div>
                            </div>
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