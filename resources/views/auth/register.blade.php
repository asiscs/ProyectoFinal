@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                                
                                    <a id="titulo" href="{{ route('landing') }}"><h1>GAMESBLOG</h1></a>

                                    <a href="{{ route('loginFoto') }}"><img id="imagenPerfil" src="images/perfil.png"></a>

                            </header>
                        </div>

<div class="container" id="login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
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
