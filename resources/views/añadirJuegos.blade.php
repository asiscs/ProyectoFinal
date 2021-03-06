@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesion</title>

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
                                        <div class="card-header">{{ __('Añadir Juego') }}</div>

                                        @if (Auth::guest())

                                        <p id="parrafoMod">Desbes iniciar sesion antes de poder añadir nuevos juegos</p>

                                        @else

                                        <div class="card-body">
                                            <form method="POST" action="{{ route('añadirJuegosPost') }}" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="titulo2" type="titulo" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete="titulo" autofocus>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="precio" type="number" class="form-control @error('precio') is-invalid @enderror" name="precio" required autocomplete="current-password">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="Descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="descripcion" type="descripcion" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" required autocomplete="current-password">
                                                    </div>
                                                </div>


                                                <label for="Archivo" class="col-md-4 col-form-label text-md-right">{{ __('Archivo') }}</label>

                                                <input type="file" id="portada" name="portada" accept="image/png, image/jpeg, image/jpg">

                                                <div class="form-group row">
                                                    <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" required autocomplete="current-password">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button id="botonAna" type="submit" class="btn btn-primary">
                                                            {{ __('Añadir') }}
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


@endsection
