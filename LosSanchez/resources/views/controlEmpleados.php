<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/bootstrap/icons/bootstrap-icons-1.11.1/bootstrap-icons.min.css" />
    <title>Registro empleado</title>
</head>

<body>
    <div class="Container">
        <div class="L-R-Header fontCenter">
            <img src="/assets/img/logo.svg" alt="Los Sanchez Logo" class="logo">
        </div>
        <div class="L-R-Body fontCenter fontwhite">
            <div class="row m-0">
                <div class="col-8">
                    <h1 class="mb-3">Registro</h1>
                    <p>Ingresa tus datos</p>
                    <button class="googleButton mb-3"><img src="https://img.icons8.com/color/16/000000/google-logo.png">
                        Sign up with Google</button><br>
                    <div class="input-group inputDiv">
                        <span class="input-group-append iconContainer">
                            <span class="input-group-text bg-transparent sideIcon">
                                <i class="bi bi-person"></i>
                            </span>
                        </span>
                        <input type="text" class="form-control textInput" placeholder="Nombres">

                    </div>
                    <div class="input-group inputDiv">
                        <span class="input-group-append iconContainer">
                            <span class="input-group-text bg-transparent sideIcon">
                                <i class="bi bi-person"></i>
                            </span>
                        </span>
                        <input type="text" class="form-control textInput" placeholder="Apellidos">

                    </div>
                    <div class="input-group inputDiv">
                        <span class="input-group-append iconContainer">
                            <span class="input-group-text bg-transparent sideIcon">
                                <i class="bi bi-telephone-fill"></i>
                            </span>
                        </span>
                        <input type="number" class="form-control textInput" placeholder="Telefono">

                    </div>
                    <div class="input-group inputDiv">
                        <span class="input-group-append iconContainer">
                            <span class="input-group-text bg-transparent sideIcon">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                        </span>
                        <input type="email" class="form-control textInput" placeholder="Email">

                    </div>
                    <div class="input-group inputDiv">
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

                    <div class="input-group inputDiv">
                        <span class="input-group-append iconContainer">
                            <span class="input-group-text bg-transparent sideIcon">
                                <i class="bi bi-lock"></i>
                            </span>
                        </span>
                        <input type="password" class="form-control textInput" placeholder="Repita la Contraseña">

                    </div>

                    <select name="cargo" id="idSelectCargo">
                        <option value="" selected>Cargo</option>
                    </select>
                    <button class="customButton mt-3">Registrarse</button><br>
                </div>

                <div class="col-4">

                    <div class="employeeContainer">
                        <div class="col-7">
                            <div class="row m-0">Employee1</div>
                            <div class="row m-0">Employee1@gmail.com</div>
                        </div>
                        <button class="deleteButton"><i class="bi bi-trash"></i></button>
                        <button class="editButton"><i class="bi bi-pencil-square"></i></button>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>