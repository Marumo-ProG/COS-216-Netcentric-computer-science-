var form = document.getElementById("signup-form");
var name = document.getElementById("name");
var surname = document.getElementById("surname");
var email = document.getElementById("email");
var password = document.getElementById("password");

// checking for the user data validation
function validateEmail(mail) 
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value))
    {
        return (true);
    } else
        return (false);
}
function validatePassword(pass){
    if(pass.value.search("[!@#$%^&*]") >= 0 && pass.value.length >= 8 && pass.value.search("[A-Z]")>=0 && pass.value.search("[a-z]") > 0){
        return true;
    }
    return false;
}
form.addEventListener("submit", function(e){

    // function variables for validation checking
    var bEmail = false, bPassword = false;

    // prevent the form submitting when the user clicks the submit button
    e.preventDefault();

    // checking if the email is valid 
    if(validatePassword(password) && validateEmail(email)){
        //alert("form well validated and submission sent");
        form.submit();
    }
    else {
        alert("Validation error, please check your information");
    }
    

    // checking the password validation
    
})