function ShowMenu(){
    var $Data=$('#menuResult')

    $.ajax({
        method: 'GET',
        url: '/api/v1/employee/getMenu',
        dataType: 'json',
        success:function(response){
            console.log(response.menu);
            var print = ''

            $.each(response.menu,function(index,menus){
                print+='<img src="../..'+menus.image+'" class="img-fo">'
            })

            $Data.append(print)
        }

    })
}

$(function(){
    ShowMenu()
})