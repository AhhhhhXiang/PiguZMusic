<!DOCTYPE html>
<html>
    <head>
        <meta charset="8-UTF">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/register.css">
        <?php
            /*require 'includes/cdn_linker.php';
            require 'include/dbh.inc.php';*/
         ?>
    </head> 
        <body>
        <div class="container">
        <div class="form-box">
            <h1 style="color: #01B3FF;">REGISTRATION</h1>
            <div class="sub-word">
                <h4>First User? Don't worry, you can now create your own</h4>
            </div>
            <form action="register.php" method="post" onsubmit="return validateForm()">
                <div class="input-box">
                    <div class="input-field">
                        <label for="username">
                            <input type="text" id="username" name="username" placeholder="Username">
                        </label>
                        <span class="error-message" id="username-error"></span>
                    </div>
                    <div class="input-field">
                        <label for="email">
                            <input type="text" id="email" name="email" placeholder="Email">
                        </label>
                        <span class="error-message" id="email-error"></span>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">
                        <label for="password">
                            <input type="password" id="password" name="password" placeholder="Password">
                        </label>
                        <span class="error-message" id="password-error"></span>
                    </div>
                    <div class="input-field">
                        <label for="confirm_password">
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                        </label>
                        <span class="error-message" id="confirm-password-error"></span>
                        <div id="password-strength-message"></div>
                    </div>                   
                </div>

                <label>
                    <input type="checkbox" name="agree_terms" id="agree_terms">
                    <span style="color: #ffffff;">I agree to terms and agreement and private policy</span>
                </label>

                <div class="btn-class-style">
                    <button type="button" class="btn-reg" onclick="location.href='your_login_page.php';">
                        <b><span>BACK TO LOGIN</span></b>
                    </button>
                    <button type="submit" class="btn-reg">
                        <b><span>REGISTER</span></b>
                    </button>
                </div>
            </form>
            <div class="popup" id="error-popup"></div>
                <script>
                    function validateForm()
                    {
                        var username = document.getElementById("username").value;
                        var email = document.getElementById("email").value;
                        var password = document.getElementById("password").value;
                        var confirm_password = document.getElementById("confirm_password").value;
                        var agree_terms = document.getElementById("agree_terms").checked;

                        document.getElementById("username-error").innerHTML = "";
                        document.getElementById("email-error").innerHTML = "";
                        document.getElementById("password-error").innerHTML = "";
                        document.getElementById("confirm-password-error").innerHTML = "";

                        // Perform validation checks
                        if (username === "") {
                            showError("Please enter a username.");
                            return false;
                        }

                        if (email === "") {
                            showError("Please enter an email address.");
                            return false;
                        }

                        if (password === "") {
                            showError("Please enter a password.");
                            return false;
                        }

                        if (confirm_password === "") {
                            showError("Please confirm your password.");
                            return false;
                        }

                        if (password !== confirm_password) {
                            showError("Password and confirm password do not match.");
                            return false;
                        }

                        if (!agree_terms) {
                            showError("Please agree to the terms and policy.");
                            return false;
                        }
                        return true; 
                    }
                    
                    function showError(message){
                        var popup = document.getElementById("error-popup");
                        popup.innerHTML = message;
                        popup.style.display = "block";
                        setTimeout(function(){
                            popup.style.display = "none";
                        }, 3000);
                    }

                    function checkPasswordStrength()
                    {
                        var password = document.getElementById("password").value;
                        var strengthMessage = document.getElementById("password-strength-message");

                        var strongRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
                    }

                    if(strongRegex.test(password))
                    {
                        strengthMessage.innerHTML = "Password Strength: Strong";
                        strengthMessage.style.color = "green";
                    } 
                    else
                    {
                        strengthMessage.innerHTML = "Password Strength: Weak";
                        strengthMessage.style.color = "red";
                    }
                </script>
            </div>
        </div>
    </body>
</html>