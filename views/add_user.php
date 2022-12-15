<?php
if(!isset($_COOKIE['status'])) {
    header('location: log_in.php?error=unauthorized_access');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/add_user_style.css">
    <link rel="icon" href="../assets/images/Free Logo Beauty Hijab.png">
    <title>Add User</title>
    <script src="https://kit.fontawesome.com/6163e804bb.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="navbar">
        <h1>Add User</h1>
    </div>
    <div class="backgroundImage">
        <div class="sidebar">
            <button class="dropdown-btn">Edit User<i class="fa-solid fa-caret-down fa-5px"></i></button>
            <div class="dropdown-container">
                <a href="view_all_users.php">View all user</a>
                <a href="add_user.php">Add user</a>
            </div>
            <button class="dropdown-btn">Edit Product<i class="fa-solid fa-caret-down fa-5px"></i></button>
            <div class="dropdown-container">
                <a href="view_all_products.php">View all Products</a>
                <a href="add_product.php">Add Product</a>
            </div>
            <button class="dropdown-btn">Edit Shop<i class="fa-solid fa-caret-down fa-5px"></i></button>
            <div class="dropdown-container">
                <a href="view_all_shop.php">View all Shop</a>
                <a href="add_shop.php">Add Shop</a>
            </div>
            <button class="dropdown-btn">Edit Posts<i class="fa-solid fa-caret-down fa-5px"></i></button>
            <div class="dropdown-container">
                <a href="view_all_posts.php">View all Post</a>
                <a href="create_post.php">Create Post</a>
            </div>
            <a href="view_profile.php">View Profile</a>
            <a href="../controllers/php/log_out.php">Log out</a>
        </div>
        <div class="main">
            <form action="../controllers/php/registration_validation.php" id="registration_form" method="post"
                  onsubmit="return validateForm()">
                <fieldset>
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
                    <input type="submit" value="Register">
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>
<script>
    let dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
<script type="text/javascript" src="../controllers/js/registration_validation.js">
    function myFunction() {
        let password = document.getElementById('password');
        if (password.type === 'password') {
            password.type = "text";
        } else {
            password.type = "password";
        }
    }
</script>
</body>
</html>