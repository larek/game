$(document).ready(function(){
    $(".btn-message").click(function(){
        var congrats = $("#congrats").val();
        var signature = $("#signature").val();
        var address = $("#address").val();
        var email = $("#email").val();
        var card = $("input[name=cardture]:checked").val();
        if(congrats=="" || address=="" || email=="" || card==""){
            alert("Необходимо заполнить все поля и выбрать изображение для открытки.");
        }else{
            $.post('site/addmessage',{congrats : congrats, signature : signature, address : address, email : email, card : card}).done(function(data){
                $("#congrats").val("");
                $("#signature").val("");
                $("#address").val("");
                $("#email").val("");
                $("input[name=cardture]:checked").val();
                window.location = window.location;
                console.log(data);
            });
        }
        
    });
});