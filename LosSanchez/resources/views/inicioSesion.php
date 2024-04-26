<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/bootstrap/icons/bootstrap-icons-1.11.1/bootstrap-icons.min.css" />
    <title>Inicio de sesion</title>
</head>

<body>
    <div class="Container">
        <div class="L-R-Header fontCenter">
            <img src="/assets/img/logo.svg" alt="Los Sanchez Logo" class="logo">
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

                <input type="password" class="form-control passInput" placeholder="Contraseña">

                <span class="input-group-append showIconContainer">
                    <span class="input-group-text bg-transparent showIcon">
                    <i class="bi bi-eye-fill"></i>
                    </span>
                </span>

            </div>
            <a href="#"><span>Olvidaste tu contraseña?</span></a><br>
            <button class="googleButton mt-3"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Sign up with Google</button><br>
                <button class="customButton mt-3">Login</button><br>

            <span class="mt-3">Aun no estas registrado?<a href="#"> Registrate</a></span>
        </div>
    </div>



    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/inicioSesion.js"></script>
</body>

</html>