function login(){
    $("#login_form").submit(function(event){
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url:"http://localhost:8000/api/login",
            type:"POST",
            data:formData,
            success:function(data){
                if(data.success == false){
                    $(".result").text(data.msg);
                }
                else if(data.success == true){
                    $tipo='Bearer';
                    localStorage.setItem("user_token",$tipo+" "+data.access_token);
                    window.open("/","_self");
                }
                else{
                    printErrorMsg(data);
                }

            }
        });
    });

    function printErrorMsg(msg){
        $(".error").text("");
        $.each(msg,function(key, value){
            $("."+key+"_err").text(value);
        });
    }
}

function ShowPass(){
    var togglePassword = $('#togglePassword');  
            var passwordField  = $('#inputPass');

            togglePassword.click(function(){
                // Si el tipo de campo de contraseña es 'password', cambia a 'text' para mostrar la contraseña
                // De lo contrario, cambia a 'password' para ocultar la contraseña
                var type = passwordField.attr('type') === 'password' ? 'text' : 'password';
                passwordField.attr('type', type);

                // Cambia el ícono entre el ícono de ojo abierto y cerrado
                if (type === 'password') {
                    togglePassword.html('<i class="bi bi-eye-slash-fill" style="color:white;"></i>');
                } else {
                    togglePassword.html('<i class="bi bi-eye-fill" style="color:white;"></i>');
                }
            });
}

function registclient(){
    $("#register_form").submit(function(event){
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url:"http://localhost:8000/api/register",
            type:"POST",
            data:formData,
            success:function(data){
                //console.log(data); //Se envio correctamente
                if(data.msg){
                    $("#register_form")[0].reset();
                    $(".error").text("");
                    $(".result").text(data.msg);
                }
                else{
                    printErrorMsg(data);
                }

            }
        });
    });

    function printErrorMsg(msg){
        $(".error").text("");
        $.each(msg,function(key, value){

            if(key == 'password'){
                if(value.length > 1){
                    $(".password_err").text(value[0]);
                    $(".password_confirmation_err").text(value[1]);
                }else{
                    if(value[0].includes('password confirmation')){
                        $("password_confirmation_err").text(value);

                    }
                    else{
                        $(".password_err").text(value);

                    }

                }

            }else{
                $("."+key+"_err").text(value);
            }


        });
    }
}

function showPassClient(){
    var togglePassword = $('#togglePassword');  
            var passwordField  = $('#inputPass');

            togglePassword.click(function(){
                // Si el tipo de campo de contraseña es 'password', cambia a 'text' para mostrar la contraseña
                // De lo contrario, cambia a 'password' para ocultar la contraseña
                var type = passwordField.attr('type') === 'password' ? 'text' : 'password';
                passwordField.attr('type', type);

                // Cambia el ícono entre el ícono de ojo abierto y cerrado
                if (type === 'password') {
                    togglePassword.html('<i class="bi bi-eye-slash-fill" style="color:white;"></i>');
                } else {
                    togglePassword.html('<i class="bi bi-eye-fill" style="color:white;"></i>');
                }
            });
}