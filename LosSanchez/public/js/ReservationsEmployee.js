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
function getIdTable (id){
    var hidden = document.getElementById("TableID");
    hidden.value=id;
}
function getTables(){
    var $Data=$('#freeTables')
    $.ajax({
        url: '/api/v1/employee/getReserve',
        type: 'GET',
        datatype: 'json',
        success: function(response){
            var tablesFree=''

            $.each(response.tables, function(index,table){
                tablesFree += '<div class="bg-custom p-4 rounded-lg shadow-sm mb-3">'
                tablesFree+='<div class="d-flex justify-content-between align-items-center">'
                tablesFree+='<span>Mesa '+table.table_number+' - Mesa exterior</span>'
                tablesFree+='<button type="submit" id="btnsubmit" class="btn btn-reserva rounded-pill btn-lg col-auto" value="1" onclick="getIdTable('+table.id+')">Reservar </button>'
                tablesFree+='</div>'
                tablesFree+='</div>'
            })

            $Data.append(tablesFree)
        }
    })
}

function Reserve(){
    var $TableDiv =$('#ReservationsTable')
    var $FreeDiv = $('#freeTables')
    $('#Create').submit(function(event){
        event.preventDefault()
        var form = $(this).serialize();

        $.ajax({
            type:'POST',
            url: '/api/v1/employee/reserve',
            data: form,
            success: function(response){
                $FreeDiv.empty()
                $TableDiv.empty()
                getReservations()
                getTables()
            },
            error: function(xhr, status, error){
                // Manejar errores
                console.error(xhr.responseText);
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

function getReservations(){
    var $TableDiv =$('#ReservationsTable')

    $.ajax({
        url: '/api/v1/employee/getReservations',
        type: 'GET',
        data: 'json',
        success: function(response){
            var print =''
            $.each(response.reservations, function(index, reservation){
                print+='<div class="bg-custom p-4 rounded-lg shadow-sm mb-4 d-flex justify-content-between align-items-center">'
                print+='<div>'
                print+='<span>Mesa '+reservation.tables_id+' - Mesa exterior: </span>'
                print+='<t><span class="text-center">'+reservation.Fecha+' a las '+reservation.hora+'</span></t>'
                print+='</div>'
                print+='<button type="submit" id="btnCancel" onclick="getIdReservation('+reservation.id+','+reservation.tables_id+')" class="btn btn-cancelar rounded-pill btn-lg col-auto">Cancelar</button>'
                print+='</div>'
            })

            $TableDiv.append(print)
        }
    })
}

function encrypt(data){
    var key = 'LosSanchezFood@12089'; // Clave secreta para encriptación AES
    var iv = CryptoJS.lib.WordArray.random(16); // Genera un IV aleatorio de 16 bytes

    var ivHex = CryptoJS.enc.Hex.stringify(iv);

    var cipher = CryptoJS.AES.encrypt(data, key, { iv: iv });
    var encryptedData = iv.concat(cipher.ciphertext); // Concatena el IV con el texto cifrado

    return [encryptedData.toString(),ivHex]; // Convierte el resultado a Base64 para facilitar la manipulación
}

function search(){
    var $TableDiv =$('#ReservationsTable')
    $('#Search').submit(function(e){
        e.preventDefault()
        var phone = document.getElementById('phoneNumber').value
        $.ajax({
            url: '/api/v1/employee/search/'+phone,
            type: 'GET',
            datatype: 'json',
            success: function(response){
                var print=''
                console.log(response.results)
                $.each(response.results, function(index,result){
                print+='<div class="bg-custom p-4 rounded-lg shadow-sm mb-4 d-flex justify-content-between align-items-center">'
                print+='<div>'
                print+='<span>Mesa '+result.tables_id+' - Mesa exterior: </span>'
                print+='<t><span class="text-center">'+result.Fecha+' a las '+result.hora+'</span></t>'
                print+='</div>'
                print+='<button type="submit" id="btnCancel" onclick="getIdReservation('+result.id+','+result.tables_id+')" class="btn btn-cancelar rounded-pill btn-lg col-auto">Cancelar</button>'
                print+='</div>'
                })

                $TableDiv.empty()

                $TableDiv.append(print)
            }
        })
    })
}

function Cancel(){
    var $TableDiv =$('#ReservationsTable')
    var $FreeDiv = $('#freeTables')
    $(document).on('submit','#Cancel',function(event){
        event.preventDefault()
        var form = $(this)[0]
        var data = new FormData(form)
        var id_reservation = $('#ReservationID').val();
        var id_table = $('#TableCancelID').val()

        $('#btnCancel').prop("disabled",true)

        $.ajax({
            type:'PUT',
            url:'/api/v1/employee/cancelReservation/'+id_reservation+'/'+id_table,
            data:data,
            processData:false,
            contentType:false,
            success: function(data){
                $('#btnCancel').prop("disabled",false)
                $FreeDiv.empty()
                $TableDiv.empty()
                getReservations()
                getTables()
            }
        })
    })
}

$(function(){
    getTables()
    getReservations()
    Reserve()
    search()
    Cancel()
    InitialazingDateTime()
})