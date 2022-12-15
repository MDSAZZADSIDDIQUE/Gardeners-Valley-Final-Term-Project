<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/forgot_password_style.css">
    <link rel="icon" href="../assets/images/Free Logo Beauty Hijab.png">
    <title>Forgot Password</title>
</head>
<body>
<div class="container">
    <div class="navbar">
        <a href="../index.php"><img src="../assets/images/Free Logo Beauty Hijab.png" alt="" class="logo"></a>
        <nav>
            <ul>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="">Discover</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="log_in.php">Log in</a></li>
            </ul>
        </nav>
    </div>
    <div class="backgroundImage">
        <form action="../controllers/php/log_in_verification.php" id="login_form" method="post"
              onsubmit="return changePasswordValidation()">
            <fieldset>
                <p class="subheader">Forgot Password</p>
                <hr>
                <label for="email_address" class="emailAddress">Email address: </label>
                <input type="email" name="emailAddress" id="email_address">
                <small id="invalid_email_address_error_message"></small>
                <br>
                <label for="password" class="password">Password: </label>
                <br>
                <input type="password" name="password" id="password">
                <small id="invalid_password_error_message"></small>
                <br>
                <input type="checkbox" name="showPassword" id="show_password" onclick="myFunction()">
                <label for="show_password" class="showPassword">Show password</label>
                <br>
                <label  class="confirmPassword" for="confirm_password">Confirm password : </label>
                <input type="password" name="confirmPassword" id="confirm_password">
                <small id="invalid_confirm_password_error_message"></small>
                <br>
                <a href="registration.php" class="createAnAccount">New here? Create an account</a>
                <br>
                <input type="submit" value="Confirm">
            </fieldset>
        </form>
    </div>
    <?php
    include_once "footer.php";
    ?>
</div>
<script>
    function myFunction() {
        let password = document.getElementById('password');
        if (password.type === 'password') {
            password.type = "text";
        } else {
            password.type = "password";
        }
    }
</script>
<script type="text/javascript" src="../controllers/js/forgot_password_validation.js"></script>
</body>
</html>