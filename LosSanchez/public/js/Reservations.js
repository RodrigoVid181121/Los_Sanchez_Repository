function InitialazingDateTime(){
    config = {
        altInput: true,
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        defaultDate: "today",
        minDate: "today",
        minTime: "12:00",
        maxTime: "22:00"
    }
    $("input[type=datetime-local]").flatpickr(config);
}
function getId (id){
    var hidden = document.getElementById("TableID");
    hidden.value=id;
}
function getData(){
    var $Data=$('#freeTables')
    jQuery.ajax({
        type:'GET',
        url: '/api/v1/clients/getReserve',
        dataType: 'json',
        success: function(response){
    
            var html=''            
    
            $.each(response.tables, function(index,table){
                html += '<div class="bg-custom p-4 rounded-lg shadow-sm mb-3">'
                html+='<div class="d-flex justify-content-between align-items-center">'
                html+='<span>Mesa '+table.table_number+' - Mesa exterior</span>'
                html+='<button type="submit" id="btnsubmit" class="btn btn-reserva rounded-pill btn-lg col-auto" value="1" onclick="getId('+table.id+')">Reservar </button>'
                html+='</div>'
                html+='</div>'
            })
            
    
            $Data.append(html)
        },
        error: function(xhr,status,error){
            alert('Error al obtener reservaciones',error);
        }
    });
}

function store(){
    var $TableDiv =$('#ReservationsTable')
    var $FreeDiv = $('#freeTables')
    $('#Create').submit(function(event){

        var form = $(this).serialize();

        $.ajax({
            type:'POST',
            url: '/api/v1/clients/reserve',
            data: form,
            success: function(response){
                $FreeDiv.empty()
                $TableDiv.empty()
                getData()
                ShowReservations()
            },
            error: function(xhr, status, error){
                // Manejar errores
                console.error(xhr.responseText);
            }
        })
    })
}

function Cancel(){
    var $TableDiv =$('#ReservationsTable')
    var $FreeDiv = $('#freeTables')
    $(document).on('submit','#Cancel',function(event){
        var form = $(this)[0]
        var data = new FormData(form)
        var id_reservation = $('#ReservationID').val();
        var id_table = $('#TableCancelID').val()

        $('#btnCancel').prop("disabled",true)

        $.ajax({
            type:'PUT',
            url:'/api/v1/clients/cancelReservation/'+id_reservation+'/'+id_table,
            data:data,
            processData:false,
            contentType:false,
            success: function(data){
                $('#btnCancel').prop("disabled",false)
                $FreeDiv.empty()
                $TableDiv.empty()
                getData()
                ShowReservations()
            }
        })
    })
}

function getIdReservation(id,id_table){
    var hidden = document.getElementById("ReservationID");
    hidden.value=id;

    var table = document.getElementById('TableCancelID')
    table.value=id_table
}
function ShowReservations(){
    var $Panel=$('#ReservationsTable')

    $.ajax({
        type: 'GET',
        url: '/api/v1/clients/getReservations',
        dataType: 'json',
        success: function(response){
            var html=''

            $.each(response.results, function(index,result){
                html+='<div class="bg-custom p-4 rounded-lg shadow-sm mb-4 d-flex justify-content-between align-items-center">'
                html+='<div>'
                html+='<span>Mesa '+result.tables_id+' - Mesa exterior: </span>'
                html+='<t><span class="text-center">'+result.Fecha+' a las '+result.hora+'</span></t>'
                html+='</div>'
                html+='<button type="submit" id="btnCancel" onclick="getIdReservation('+result.id+','+result.tables_id+')" class="btn btn-cancelar rounded-pill btn-lg col-auto">Cancelar</button>'
                html+='</div>'
            })

            $Panel.append(html)
        }
    })
}

$(function () {
    getData();
    store();
    Cancel()
    ShowReservations();        
    InitialazingDateTime()
})