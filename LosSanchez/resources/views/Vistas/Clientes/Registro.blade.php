<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Registro</title>
</head>

<body>
    <div class="Container">
        <div class="L-R-Header fontCenter Logo">
            <img src="{{asset('img/Logo_Sanchez.png')}}" alt="Los Sanchez Logo" class="logo">
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
                            <i class="bi bi-eye-slash-fill" id="showButton" style="color:white;"></i>
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



    <!--<script src="../../../js/bootstrap.min.js"></script>-->
    <script src="../../../js/registroCliente.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>

</html>