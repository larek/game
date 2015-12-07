$(document).ready(function(){

var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

    $(".btn-message").click(function(){
        var congrats = $("#congrats").val();
        var signature = $("#signature").val();
        var address = $("#address").val();
        var email = $("#email").val();
        var card = $("input[name=cardture]:checked").val();
        if(congrats=="" || address=="" || email=="" || card==undefined){
            alert("Необходимо заполнить все поля и выбрать изображение для открытки.");
        }else if(!pattern.test($("#email").val())){
            alert("Некорректный email. Проверьте правильность написания")
        }else{
            $(".btn-message").addClass("disabled");
            $(".btn-message").html("Отправляю запрос");
            $.post('/site/addmessage',{congrats : congrats, signature : signature, address : address, email : email, card : card}).done(function(data){

                $("#congrats").val("");
                $("#signature").val("");
                $("#address").val("");
                $("#email").val("");
                $("input[name=cardture]:checked").val();
                console.log(data);
            });
            $(".overlay").css("display", "flex");
        }

    });

    $(".close-btn").click(function(){
        $(".overlay").css("display", "none");
        window.location = window.location;
    });
});
