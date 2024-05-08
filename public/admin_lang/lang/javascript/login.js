$(document).ready(function (){
    $("#loginForm").submit(function (e) {
            e.preventDefault();
 

        var user_name = $('#username').val();
        var user_psd = $('#password').val();
 
   
        $.ajaxSetup({
            headers:{
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
            },
        });

         $.ajax({
             type: 'POST',
             url: 'logindata', // Change this to your server endpoint
             data: {
                 username: user_name,
                 password: user_psd,
             },
             success:function(response){
                 console.log(response);

                 if (response == 'match'){
                     window.location.href = 'dashboard.php'; 
                 }else{
                     alert(response);
                 }
             }

         });
         
    });
});