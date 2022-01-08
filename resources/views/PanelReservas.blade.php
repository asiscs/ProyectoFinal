<!DOCTYPE html>
<html>
<head>
    <title>Panel Reservas</title>

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

                                    <p id="primerTexto">¡Comparte tu experiencia con otros usuarios!</p>
                                
                                    <a id="titulo" href="{{ route('landing') }}"><img id="logo" src="images/logo.png"></a>

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

            <section class="col-8">


                        <table id="tablaUsuarios">

                            <tr class="filas">

                                <th>Nombre Juego</th>

                                <th>Fecha Reserva</th>

                                <th>Hora Reserva</th>

                            </tr>

                        @foreach($todosJuegos as $juego)

                        <tr class="filas">

                            <td>{{ $juego->titulo }}</td>
                            <td>{{ date('d M Y', $juego->created_at) }} </td>
                            <td> {{ date('H:i:s', $juego->created_at) }} </td>

                        </tr>
                        @endforeach

                        </table>


            </section>

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