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

                                    <p id="primerTexto">¡Comparte tu experiencia con otros usuarios!</p>
                                
                                    <a id="titulo" href="{{ route('landing') }}"><h1>GAMESBLOG</h1></a>

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

                                <th>Numero</th>

                                <th>Nombre</th>

                                <th>Correo Electronico</th>

                            </tr>

                        @foreach($todosUsuarios as $user)

                        <form method="POST" action="/eliminarUsuarios/{{$user->id}}">
                        @csrf
                        @method('DELETE')

                        <tr class="filas">

                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><input type="submit" name="Eliminar" id="eliminar" value="Eliminar"></input></td>

                        </tr>

                        </form>
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