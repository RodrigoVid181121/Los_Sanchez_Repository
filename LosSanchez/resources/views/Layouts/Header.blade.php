<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-nav box-shadow mb-3">
            <div class="box-container">           
                <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul class="navbar-nav flex-grow-1 menu">
                            <li class="nav-item">
                                <a class="nav-link"><img src="{{asset('img/Logo_Sanchez.png')}}"style="height:4vw;"/></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/aboutUs')}}">Sobre Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/menuclients')}}">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/reservaciones/clientes')}}">Reservaciones</a>
                            </li>
                            <li class="nav-item">
                                <div class="action">
                                <div onclick="sesionToggle();">
                                <a class="nav-link" style="color:blue;">Inicio Sesion</a>
                                </div>
                                <div class="sesion">
                                    <img src="{{asset('img/Icon-User.png')}}" style="padding-left:2vw;">
                                    <h3>USUARIO</h3>
                                    <ul>
                                    <li>
                                    @include('header')                                                                
                                    </li>
                                    <li>
                                    <button class="btn btn-primary bt-user"><a href="/login">Login</a></button>
                                    </li>       
                                    </ul>
                                </div>
                                </div>  
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
</body>
</html>