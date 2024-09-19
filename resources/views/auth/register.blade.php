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
                        <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="username" placeholder="Username" name="NAME"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Your Phone"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group">
                                <i class="zmdi zmdi-close-circle-o" id="err-symbol"></i>
                                <span id="error"><x-validation-errors class="mb-4" /></span>
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
                form.submit();
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



{{-- 
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
 --}}
