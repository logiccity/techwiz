var form = document.getElementById("register-form");
var username = document.getElementById("username");
var email = document.getElementById("email");
var phone = document.getElementById("phone");
var password = document.getElementById("password");
var rePass = document.getElementById("re_pass");
form.addEventListener("submit",function(event){
    event.preventDefault();
    if(!(username.value.length >= 5)){
        sendError("username length is too small");
    }else if(!(password.value == rePass.value)){
        sendError("password and confirm password not match");
    }else{
        
        var result = validatePassword(password.value);
        if(result == "Password is valid!"){
            form.submit();
        clearError();
        }else{
            sendError(result);
        }

    }
})
function sendError(errors){
    var error = document.getElementById("error");
    var errorSymbol = document.getElementById("err-symbol");
    error.innerHTML = errors;
    errorSymbol.style.display = "inline";

}
function clearError(){
    var error = document.getElementById("error");
    var errorSymbol = document.getElementById("err-symbol");
    error.innerHTML = "";
    errorSymbol.style.display = "none";
}
// Validate password function 
function validatePassword(password) {
let validationMessages = [];

// Check each criterion
const criteria = {
length: password.length >= 8,
uppercase: /[A-Z]/.test(password),
lowercase: /[a-z]/.test(password),
digit: /\d/.test(password),
special: /[!@#$%^&*()\-_+=<>?]/.test(password)
};

for (const [criterion, met] of Object.entries(criteria)) {
switch (criterion) {
    case 'length':
        if (!met) validationMessages.push("Password must be at least 8 characters long.");
        break;
    case 'uppercase':
        if (!met) validationMessages.push("Password must contain at least one uppercase letter.");
        break;
    case 'lowercase':
        if (!met) validationMessages.push("Password must contain at least one lowercase letter.");
        break;
    case 'digit':
        if (!met) validationMessages.push("Password must contain at least one digit.");
        break;
    case 'special':
        if (!met) validationMessages.push("Password must contain at least one special character.");
        break;
    default:
        break;
}
}

if (validationMessages.length > 0) {
return "Password validation failed:\n" + validationMessages.join("\n");

} else {
return "Password is valid!";
}
}