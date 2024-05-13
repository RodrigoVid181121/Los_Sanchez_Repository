
function getMail (mail){
    var hidden = document.getElementById("mail");
    hidden.value=mail;
}

function ShowEmpleados(){
    var $Panel=$('#empleadostable')
    $.ajax({
        type: 'GET',
        url: '/api/Empleados/getEmpleados',
        dataType: 'json',
        success: function(response){
            var html=''
            console.log(response.response)
            $.each(response.response, function(index,result){
                        html+='<div class="row m-0">'+result.name+'</div>'
                        html+='<div class="row m-0">'+result.email+'</div>'
                        html+='<button type="submit" id="deleteButton" class="deleteButton" onclick="getMail('+result.email+')"><i class="bi bi-trash"></i></button>'
            })
            $Panel.append(html)
        }
    })
}
function deleteEmpleados(){
    $(document).on('submit','#Cards',function(event){
        event.preventDefault()
        var form = $(this)[0]
        var data = new FormData(form)
        var mail = document.getElementById('mail').value

        alert(mail)

        $.ajax({
            type:'DELETE',
            url:'/api/Empleados/deleteEmpleados/'+mail,
            data:data,
            processData:false,
            contentType:false,
            success: function(data){
            }
        })
    })
}

function logEmpleados(){
    var $Panel=$('#empleadostable')
    $('#logUser').submit(function(event){
        event.preventDefault()
        var form = $(this).serialize();
        console.log(form)

        $.ajax({
            type:'POST',
            url: '/api/Empleados/logEmpleados',
            data: form,
            success: function(response){
                console.log(response.response)
                $Panel.empty()
                $("#logUser")[0].reset();
                ShowEmpleados()
            },
            error: function(xhr, status, error){
                // Manejar errores
                console.error(xhr.responseText);
            }
        })
    })
}

$(function () {
    ShowEmpleados();
    deleteEmpleados();
    logEmpleados();
})