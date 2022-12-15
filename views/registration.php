<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/registration_style.css">
    <link rel="icon" href="../assets/images/Free Logo Beauty Hijab.png">
    <title>Registration</title>
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
        <form action="../controllers/php/registration_validation.php" id="registration_form" method="post"
              onsubmit="return validateForm()">
            <fieldset>
                <p class="subheader">REGISTRATION</p>
                <hr>
                <table>
                    <tr>
                        <td>
                            <label for="first_name">First name : </label>
                            <input type="text" name="firstName" id="first_name">
                            <small id="invalid_first_name_error_message"></small>
                        </td>
                        <td>
                            <label for="last_name">Last name : </label>
                            <input type="text" name="lastName" id="last_name">
                            <small id="invalid_last_name_error_message"></small>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Gender : </label>
                            <br>
                            <input type="radio" name="gender" id="male" value="Male">
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="female" value="Female">
                            <label for="female">Female</label>
                            <br>
                            <small id="invalid_gender_error_message"></small>
                        </td>
                        <td>
                            <label for="date_of_birth">Date of birth : </label>
                            <input type="date" name="dateOfBirth" id="date_of_birth">
                            <br>
                            <small id="invalid_date_of_birth_error_message"></small>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="role">Select your role : </label>
                            <select name="role" id="role">
                                <option value="Buyer">Buyer</option>
                                <option value="Seller">Seller</option>
                                <option value="Expert">Expert</option>
                                <option value="Delivery man">Delivery man</option>
                            </select>
                        </td>
                        <td>
                            <label for="email_address">Email address : </label>
                            <input type="email" name="emailAddress" id="email_address">
                            <small id="invalid_email_address_error_message"></small>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password : </label>
                            <input type="password" name="password" id="password">
                            <small id="invalid_password_error_message"></small>
                            <br>
                            <input type="checkbox" name="showPassword" id="show_password" onclick="myFunction()">
                            <label for="show_password" class="show_password">Show password</label>
                        </td>
                        <td>
                            <label for="confirm_password">Confirm password : </label>
                            <input type="password" name="confirmPassword" id="confirm_password">
                            <small id="invalid_confirm_password_error_message"></small>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Register"">
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
<script type="text/javascript" src="../controllers/js/registration_validation.js"></script>
</body>
</html>