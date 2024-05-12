<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Inicio de sesion</title>
</head>

<body>
    <div class="Container">
        <div class="L-R-Header fontCenter">
            <img src="{{asset('img/Logo_Sanchez.png')}}" alt="Los Sanchez Logo" class="logo">
        </div>
        <div class="L-R-Body fontCenter fontwhite">
            <h1 class="mb-3">Inicio de sesion</h1>
            <p>Ingresa tu usuario y contraseña</p>



            <div class="input-group inputDiv">
                <span class="input-group-append iconContainer">
                    <span class="input-group-text bg-transparent sideIcon">
                        <i class="bi bi-person"></i>
                    </span>
                </span>
                <input type="email" class="form-control textInput" placeholder="Email">

            </div>

            <div class="input-group inputDiv mt-3">
                <span class="input-group-append iconContainer">
                    <span class="input-group-text bg-transparent sideIcon">
                        <i class="bi bi-lock"></i>
                    </span>
                </span>

                <input type="password" class="form-control passInput" id="idInputPassword" placeholder="Contraseña">

                <span class="input-group-append showIconContainer">
                    <span class="input-group-text bg-transparent showIcon">
                    <i class="bi bi-eye-slash-fill" id="showButton"></i>
                    </span>
                </span>

            </div>
            <a href="#"><span>Olvidaste tu contraseña?</span></a><br>
            <button class="googleButton mt-3"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Sign up with Google</button><br>
                <button class="customButton mt-3">Login</button><br>


            <span class="mt-3">Aun no estas registrado?<a href="registro"> Registrate</a></span>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="../../../js/inicioSesion.js"></script>
</body>

</html>