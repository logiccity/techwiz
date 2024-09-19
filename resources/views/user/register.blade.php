<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <!-- Font Icon -->
      <link rel="stylesheet" href="user/register/fonts/material-icon/css/material-design-iconic-font.min.css">

      <!-- Main css -->
      <link rel="stylesheet" href="user/register/css/style.css">
</head>
<body>
    
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="email" id="phone" placeholder="Your Phone"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group">
                                <i class="zmdi zmdi-close-circle-o" id="err-symbol"></i>
                                <span id="error"></span>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="user/register/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
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


    </script>
    
</body>
</html>