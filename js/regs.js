$(document).ready(function(){
    $("#submit").click(function(e){
        var email = $("#email").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();   
    
        if (firstname == "") {
            valid = false;
            $("#errorFirstname").html("Firstname cannot be empty");
        } else {
            $("#errorFirstname").html("");
        }

        if(lastname == ""){
            valid = false;
            $("#errorLastname").html("Lastname cannot be empty");
        } else {
            $("#errorLastname").html("");
        }

        if(email == ""){
            valid = false;
            $("#email").html("Email cannot be empty");
        } else {
            $("#email").html("");
        }
    
        if(password == ""){
            valid = false;
            $("#password").html("Password cannot be empty");
        } else {
            $("#password").html("");
        }

    });
}); 