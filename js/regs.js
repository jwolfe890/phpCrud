$(document).ready(function(){
    $("#submit").click(function(e){

        e.preventDefault();

        var email = $("#email").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();  
        var password = $("#password").val();   
    
        if (firstname == "") {
            valid = false;
            $("#errorFirstname").html("First name cannot be empty");
        } else {
            $("#errorFirstname").html("");
        }

        if(lastname == ""){
            valid = false;
            $("#errorLastname").html("Last name cannot be empty");
        } else {
            $("#errorLastname").html("");
        }

        if(email == ""){
            valid = false;
            $("#errorEmail").html("Email cannot be empty");
        } else {
            $("#errorEmail").html("");
        }
    
        if(password == ""){
            valid = false;
            $("#errorPassword").html("Password cannot be empty");
        } else {
            $("#errorPassword").html("");
        }

    });
}); 