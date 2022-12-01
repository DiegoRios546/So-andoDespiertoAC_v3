$(function(){
    var mayus   = new RegExp("^(?=.*[A-Z])");
    var special = new RegExp("^(?=.*[!@#$%&*].*[!@#$%&*].*[!@#$%&*])");
    var numbers = new RegExp("^(?=.*[0-9])");
    var lower   = new RegExp("^(?=.*[a-z])");
    var len     = new RegExp("^(?=.{8,})");

    var re0gExp      = [mayus, special, numbers, lower, len];
    var elementos   = [$("#mayus"), $("#special"), $("#numbers"), $("#lower"), $("#len")];

    $("#password").on("keyup",function(){
        var pass = $("#password").val();
        var check = 0;

        for(var i = 0; i < 5; i++){
            if(regExp[i].test(pass)){
                elementos[i].hide();
                check++; 
            }else{
                elementos[i].show();

            }
        }

        if(check >= 0 && check <=2){
            $("#mensaje").text("Contraseña muy insegura").css("color", "red");
        }else if(check >=3 && check <= 4){  
            $("#mensaje").text("Contraseña poco segura").css("color", "orange");
        }else if(check == 5){
            $("#mensaje").text("Contraseña muy segura").css("color", "green");
        }
    });
});


        function mostrarContrasena(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }