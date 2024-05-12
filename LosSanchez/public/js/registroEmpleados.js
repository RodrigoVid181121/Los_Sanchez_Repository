window.onload = function () {
    const showButton = document.getElementById("showButton");
    const inputPassword = document.querySelectorAll(".classInputPasswords");
    const inputText = document.querySelectorAll(".textInput");
    const btnregister = document.getElementById("btnRegister");

    const inputNames = document.getElementById("inputNames");
    const inputSurNames = document.getElementById("inputSurNames");
    const inputPhone = document.getElementById("inputPhone");
    const inputEmail = document.getElementById("inputEmail");
    const inputPass = document.getElementById("inputPass");
    const inputRepPass = document.getElementById("inputrepPass");
    const selectCargo = document.getElementById("idSelectCargo");
    const errorContainer = document.querySelectorAll(".error");

    //Funciones para poder ver la contraseña pasando el cursor por el icono.
    showButton.onmouseenter = function () {
        inputPassword.forEach(element => {
            element.type = 'text';
        });
        showButton.style.color = 'white';
        showButton.className = 'bi bi-eye-fill';
    }

    showButton.onmouseleave = function () {
        inputPassword.forEach(element => {
            element.type = 'password';
        });
        showButton.style.color = 'black';
        showButton.className = 'bi bi-eye-slash-fill';
    }

    //For each para que cada vez que se cambie un input se eliminen los mensajes de error.
    inputText.forEach(element => {
        element.onfocus = function () {
            errorContainer.forEach(container => {
                container.innerHTML = "";
            })
        }
    });

    //Funcion  para validar los campos
    function formValidate() {
        let name = false;
        let surName = false;
        let phone = false;
        let email = false;
        let pass = false;
        let repPass = false;
        let cargo = false;
        const emailExpresion = /^.*@.*\.[a-zA-Z]{2,3}$/;

        if (inputNames.value != "") {
            name = true;
        }
        if (inputSurNames.value != "") {
            surName = true;
        }
        if (inputPhone.value != "" && inputPhone.value.length == 8) {
            phone = true;
        }
        if (inputEmail.value != "" && emailExpresion.test(inputEmail.value) == true) {
            email = true;
        }
        if (inputPass.value != "" && inputPass.value.length >= 8) {
            pass = true;
        }
        if (inputRepPass.value != "" && inputRepPass.value == inputPass.value) {
            repPass = true;
        }
        if (selectCargo.value != "") {
            cargo = true;
        }

        if (name == true && surName == true && phone == true && email == true && pass == true && repPass == true && cargo == true) {
            return true;
        } else {
            return false;
        }
    }

    ////Funcion para mostrar al usuario que campos estan mal
    function showError() {
        const emailExpresion = /^.*@.*\.[a-zA-Z]{2,3}$/;

        if (inputNames.value == "") {
            errorContainer[0].innerHTML = "Porfavor, ingrese sus nombres";
        } else {
            errorContainer[0].innerHTML = "";
        }

        if (inputSurNames.value == "") {
            errorContainer[1].innerHTML = "Porfavor, ingrese sus apellidos";
        } else {
            errorContainer[1].innerHTML = "";
        }

        if (inputPhone.value == "" || inputPhone.value.length < 8 || inputPhone.value.length > 8) {
            errorContainer[2].innerHTML = "Ingrese un telefono valido";
        } else {
            errorContainer[2].innerHTML = "";
        }

        if (inputEmail.value == "" || emailExpresion.test(inputEmail.value) == false) {
            errorContainer[3].innerHTML = "Ingrese un email valido";
        } else {
            errorContainer[3].innerHTML = "";
        }

        if (inputPass.value == "" || inputPass.value.length < 8) {
            if (inputPass.value == "") {
                errorContainer[4].innerHTML = "Ingrese una contraseña";
            } else {
                errorContainer[4].innerHTML = "Su contraseña debe tener como minimo 8 caracteres";
            }
        } else {
            errorContainer[4].innerHTML = "";
        }

        if (inputRepPass.value != inputPass.value) {
            errorContainer[5].innerHTML = "Contraseña no coincide";
        } else {
            errorContainer[5].innerHTML = "";
        }

        if (selectCargo.value == "") {
            errorContainer[6].innerHTML = "Seleccione un cargo";
        } else {
            errorContainer[6].innerHTML = "";
        }
    };

    //Funcion para habilitar o desabilitar el boton en funcion de el formulario 
    btnregister.onmouseenter = function () {

        if (formValidate() == true) {
            btnregister.disabled = false;
            console.log(formValidate())
            btnregister.style.backgroundColor = "white";
            btnregister.onmouseleave = function () { btnregister.style.backgroundColor = "#FF8F45" };
            showError();
        } else {

            btnregister.disabled = true;
            btnregister.style.backgroundColor = "red";
            showError();
            btnregister.onmouseleave = function () { btnregister.style.backgroundColor = "#FF8F45" };
        }
    }
};

