$(document).ready(function(){
    $("#submit").click(function(e){

        e.preventDefault();

        var email = $("#email").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();  
        var password = $("#password").val();   
    
        if (firstname == "" || !isNameValid(firstname)) {
            valid = false;
            $("#errorFirstname").html("First name cannot be empty or must be valid");
        } else {
            $("#errorFirstname").html("");
        }

        if(lastname == "" || !isNameValid(lastname)){
            valid = false;
            $("#errorLastname").html("Last name cannot be empty or must be valid");
        } else {
            $("#errorLastname").html("");
        }

        if(email == "" || !isemailValid(email)){
            valid = false;
            $("#errorEmail").html("Email cannot be empty or must be valid");
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

function isNameValid(name) {
    return /^[a-zA-Z '.-]{2,}?*$/.test(name)
}


function isemailValid(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)
}