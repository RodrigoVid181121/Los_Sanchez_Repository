$.ajax({
    type:'GET',
    url: 'api/v1/getReserve',
    dataType: 'json',
    success: function(response){
        console.log(response)
        var Data=$('#freeTables')

        var html='<input type="hidden"/>'
        

        $.each(response.tables, function(index,table){
            html += '<div class="bg-custom p-4 rounded-lg shadow-sm mb-3">'
            html+='<div class="d-flex justify-content-between align-items-center">'
            html+='<input name="'+table.table_number+'" type="hidden"/>'
            html+='<span>Mesa '+table.table_number+' - Mesa exterior</span>'
            html+='<a href="#" class="btn btn-reserva rounded-pill btn-lg col-auto">Reservar</a>'
            html+='</div>'
            html+='</div>'
        })
        

        Data.append(html)
    },
    error: function(xhr,status,error){
        alert('Error al obtener reservaciones',error);
    }
});