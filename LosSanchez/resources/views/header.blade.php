<!DOCTYPE html>
<html lang="en">
<head>
    <title>API</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
</head>
<body>

    <button style="color=blue;" class="logout">Pruebita Nada mas</button>


    <script>

        
   if(window.location.pathname == '/' window.location.pathname == '/login' || window.location.pathname == '/registro'){
            if(token != null){
                window.open('/','_self');
            }else{
                console.log('Página actual');
                
            }
        }else{
            console.log(token);
            if(token == null){
                window.open('/login','_self');
            }
        }

        var token = localStorage.getItem('user_token');


        $(document).ready(function(){

        $(".logout").click(function(){
        $.ajax({
            url:"http://localhost:8000/api/logout",
            type:"GET",
            headers:{'Authorization': localStorage.getItem('user_token')},
            success:function(data){
                if(data.success == true){
                    localStorage.removeItem('user_token');
                    window.open("/login","_self");
                }

            }
        })
        
    });
})
    </script>

</body>
</html>