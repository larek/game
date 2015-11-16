$(document).ready(function(){
    $(".btn-message").click(function(){
        var message = $(".message").val();
        var name = $(".name").val();
        if(message=="" || name==""){
            alert("Заполните хотябы одно поле");
        }else{
            $.post('site/addmessage',{name : name, message : message}).done(function(data){
                $(".message").val("");
                $(".name").val("");
                window.location = window.location;
                console.log(data);        
            });
        }
        
    });
});