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
    <link rel="stylesheet" href="../assets/css/view_all_users.css">
    <link rel="icon" href="../assets/images/Free Logo Beauty Hijab.png">
    <title>View All Users</title>
    <script src="https://kit.fontawesome.com/6163e804bb.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="navbar">
        <h1>VIEW ALL USERS</h1>
    </div>
    <div class="backgroundImage">
        <div class="sidebar">
            <a href="admin_panel.php">Dashboard</a>
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
            <table>
                <tr>
                    <td colspan="7" class="search"><input type="text" name="search" id="searchString">
                        <button onclick="searchUser()"><label for="searchString"><i
                                        class="fa-solid fa-magnifying-glass fa-5px"></i></button>
                    </td>
                </tr>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Role</th>
                    <th>Email Address</th>
                </tr>
                <?php
                include_once "../controllers/php/show_all_users.php";
                include_once "../models/database.php";
                session_start();
                show_user();
                ?>
            </table>
        </div>
    </div>
</div>
<script>
    let dropdown = document.getElementsByClassName("dropdown-btn");
    let i;
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            let dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }

    function deleteUser(userID) {
        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '../controllers/php/delete_user.php?userID=' + userID, true);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                hiddenIDName = "hidden" + userID;
                deletionMessageIDName = 'deletation_message' + userID;
                document.getElementById(deletionMessageIDName).innerHTML = this.responseText;
                let element = document.getElementById(hiddenIDName);
                element.classList.remove("hidden");
            }
        }
        xhttp.send();
    }

    function deletingUser(userID) {
        window.location.replace("../controllers/php/deleting_user.php?userID=" + userID);
    }

    function cancelDeletion(userID) {
        hiddenIDName = "hidden" + userID;
        let element = document.getElementById(hiddenIDName);
        element.classList.add("hidden");
    }

    function searchUser() {
        let searchString = document.getElementById('searchString').value;
        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '../controllers/php/search_user.php?searchString=' + searchString, true);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const collection = document.getElementsByClassName("showUsers");
                for (let i = 0; i < collection.length; i++) {
                    if (i != this.responseText && i != 'Not found') {
                        collection[i].classList.add("hidden");
                    }
                }
            }
        }
        xhttp.send();
    }
</script>
</body>
</html>