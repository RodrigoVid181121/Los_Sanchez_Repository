<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/bootstrap/icons/bootstrap-icons-1.11.1/bootstrap-icons.min.css" />
    <title>Registro</title>
</head>

<body>
    <div class="Container">
        <div class="L-R-Header fontCenter">
            <img src="/assets/img/logo.svg" alt="Los Sanchez Logo" class="logo">
        </div>
        <div class="L-R-Body fontCenter fontwhite">

            <h1>Registro</h1>
            <p>Ingrese sus datos</p>

            <button class="googleButton mb-3"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Sign up
                with Google</button><br>

            <form action="" method="">

                <div class="input-group inputDiv">
                    <span class="input-group-append iconContainer">
                        <span class="input-group-text bg-transparent sideIcon">
                            <i class="bi bi-person"></i>
                        </span>
                    </span>
                    <input type="text" class="form-control textInput" id="inputNames" placeholder="Nombres">

                </div>
                <div class="error"></div>

                <div class="input-group inputDiv">
                    <span class="input-group-append iconContainer">
                        <span class="input-group-text bg-transparent sideIcon">
                            <i class="bi bi-person"></i>
                        </span>
                    </span>
                    <input type="text" class="form-control textInput" id="inputSurNames" placeholder="Apellidos">

                </div>
                <div class="error"></div>

                <div class="input-group inputDiv">
                    <span class="input-group-append iconContainer">
                        <span class="input-group-text bg-transparent sideIcon">
                            <i class="bi bi-telephone-fill"></i>
                        </span>
                    </span>
                    <input type="number" class="form-control textInput" id="inputPhone" maxlength="8" placeholder="Telefono">

                </div>
                <div class="error"></div>

                <div class="input-group inputDiv">
                    <span class="input-group-append iconContainer">
                        <span class="input-group-text bg-transparent sideIcon">
                            <i class="bi bi-envelope-fill"></i>
                        </span>
                    </span>
                    <input type="email" class="form-control textInput" id="inputEmail" placeholder="Email">

                </div>
                <div class="error"></div>

                <div class="input-group inputDiv">
                    <span class="input-group-append iconContainer">
                        <span class="input-group-text bg-transparent sideIcon">
                            <i class="bi bi-lock"></i>
                        </span>
                    </span>
                    <input type="password" class="form-control passInput classInputPasswords" id="inputPass"
                        placeholder="Contraseña">
                    <span class="input-group-append showIconContainer">
                        <span class="input-group-text bg-transparent showIcon">
                            <i class="bi bi-eye-slash-fill" id="showButton"></i>
                        </span>
                    </span>
                </div>
                <div class="error"></div>

                <div class="input-group inputDiv">
                    <span class="input-group-append iconContainer">
                        <span class="input-group-text bg-transparent sideIcon">
                            <i class="bi bi-lock"></i>
                        </span>
                    </span>
                    <input type="password" class="form-control textInput classInputPasswords" id="inputrepPass"
                        placeholder="Repita la Contraseña">

                </div>
                <div class="error"></div>

                <button class="customButton mt-3" id="btnRegister" disabled>Registrarse</button><br>

            </form>


        </div>
    </div>
    </div>



    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/registroCliente.js"></script>
</body>

</html>