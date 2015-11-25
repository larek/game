$(document).ready(function(){
    $(".btn-message").click(function(){
        var congrats = $("#congrats").val();
        var signature = $("#signature").val();
        var address = $("#address").val();
        var email = $("#email").val();
        if(congrats=="" || address=="" || email==""){
            alert("Заполните хотябы одно поле");
        }else{
            $.post('site/addmessage',{congrats : congrats, signature : signature, address : address, email : email}).done(function(data){
                $("#congrats").val("");
                $("#signature").val("");
                $("#address").val("");
                $("#email").val("");
                window.location = window.location;
                console.log(data);
            });
        }
        
    });
});