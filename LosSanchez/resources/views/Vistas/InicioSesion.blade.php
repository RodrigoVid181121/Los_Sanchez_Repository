<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Registro</title>

         <!--<script src="../../../js/bootstrap.min.js"></script>-->
         <script src="../../../js/registroCliente.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--> <!-- Tuve problemas con esta etiqueta -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 

    <style>
        span{
            color:blue;
            font-size:1rem;
            font-family: 'Times New Roman', Times, serif;
            font-weight:bold;
        }
    </style>
   
</head>

<body>

    <div class="Container">
    

        <div class="L-R-Header fontCenter Logo">
            <img src="{{asset('img/Logo_Sanchez.png')}}" alt="Los Sanchez Logo" class="logo">
        </div>
        <div class="L-R-Body fontCenter fontwhite">

            <h1>Inicio de Sesión</h1>
            <p>Ingrese su Correcto electronico y Contraseña</p>

            <form id="login_form" action="" method="">

                <div class="input-group inputDiv">
                    <span class="input-group-append iconContainer">
                        <span class="input-group-text bg-transparent sideIcon">
                            <i class="bi bi-envelope-fill"></i>
                        </span>
                    </span>
                    <input type="email" class="form-control textInput" id="inputEmail" name="email" placeholder="Email">
                </div>
                <span class="error email_err"></span>
                <div class="input-group inputDiv">
                    <span class="input-group-append iconContainer">
                        <span class="input-group-text bg-transparent sideIcon">
                            <i class="bi bi-lock"></i>
                        </span>
                    </span>
                    <input type="password" class="form-control passInput classInputPasswords" id="inputPass" name="password"
                        placeholder="Contraseña">
                    <span class="input-group-append showIconContainer">
                        <span class="input-group-text bg-transparent showIcon" id="togglePassword">
                            <i class="bi bi-eye-slash-fill"  style="color:white;"></i>
                        </span>
                    </span>
                </div>
                <span class="error password_err"></span><br>
               <span><a href="#">Olvidaste tu contraseña?</a></span><br><br>
                <button class="googleButton mb-3"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Sign up
                with Google</button><br>

                <input class="customButton mt-3" id="btnRegister" type="submit" value="Login"><br>
                <span class="mt-3"><a href="registro">Aun no estas registrado? Registrate</a></span>

            </form>
            <br>
            <p class="result"></p>


        </div>
    </div>
    </div>
        
</body>

</html>