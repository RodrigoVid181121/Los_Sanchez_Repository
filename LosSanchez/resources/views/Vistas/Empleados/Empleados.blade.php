@extends('Layouts.plantilla')
@section('content')

<div class="Container">
        <div class="L-R-Body fontCenter fontwhite">
            <div class="row m-0">
                <div class="col-sm">
                    <h1 class="mb-3">Registro</h1>
                    <p>Ingresa tus datos</p>
                    <button class="googleButton mb-3"><img src="https://img.icons8.com/color/16/000000/google-logo.png"/>
                        Sign up with Google</button><br>
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
                            <input type="number" class="form-control textInput" id="inputPhone" placeholder="Telefono">

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

                        <select name="cargo" id="idSelectCargo">
                            <option value="" selected>Cargo</option>
                        </select>
                        <div class="error"></div>
                        <button class="customButton mt-3" id="btnRegister" disabled>Registrarse</button><br>

                    </form>
                </div>

                <div class="col-sm pt-5">
                    <div class="employeeContainer">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="col-md-10">
                                <span class="txtempl">Employee1 (contenedor de muestra)</span>
                                <span>Employee1@gmail.com</span>
                            </div>
                            <div class="col-md-2">
                                <button class="deleteButton"><i class="bi bi-trash"></i></button>
                                <button class="editButton"><i class="bi bi-pencil-square"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop