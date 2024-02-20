<!--php version-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <?php
        /*require 'includes/cdn_linker.php';
        require 'include/dbh.inc.php';*/
    ?>
</head>
<body>
    <form class="container" method="post" action="login.php" onsubmit="return validateForm()"> 
        <div class="form-box">
            <h1>LOGIN</h1>
            <div class="sub-word"><br>
                <p>Welcome Back! Please Log In Here.</P>
            </div>
            <div class="input-box">
                <label><input type="text" id="username" name="username" placeholder="Username"></label>
                <span class="error-message" id="username-error"></span>
            </div>
            <div class="input-box">
                <label><input type="password"  id="password" name="password" placeholder="Password"></label>
                <span class="error-message" id="password-error"></span>
            </div>
            <div class="btn-class-style">
                <button type="button" class="btn1" >REGISTRATION</button>
                <button type="button" class="btn1" >FORGET PASSWORD</button>
            </div>
            <div class="remember-forget">
                <label>
                    <input type="checkbox" style="accent-color: #ffffff;">
                    <b style="color: #ffffff;">Remember me</b>
                </label>
            </div>
            <div class="btn-login">
                <button type="submit" class="btn2">LOGIN</button>
            </div>
        </div>
        <div class="popup" id="error-popup"></div>
    </form>
    <script>
        function validateForm()
        {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "")
            {
                showError("Please enter a username.", "username-error");
                return false;
            }

            if (password === "") {
                showError("Please enter a password.", "password-error");
                return false;
            }

            return true;

            function showError(message) {
                var popup = document.getElementById("error-popup");
                popup.innerHTML = message;
                popup.style.display = "block";
                setTimeout(function(){
                    popup.style.display = "none";
                }, 3000);
            }
        }
    </script>
</body>
</html>
