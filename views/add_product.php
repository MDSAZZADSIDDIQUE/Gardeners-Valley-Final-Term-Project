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
    <link rel="stylesheet" href="../assets/css/add_product_style.css">
    <link rel="icon" href="../assets/images/Free Logo Beauty Hijab.png">
    <title>Add Product</title>
    <script src="https://kit.fontawesome.com/6163e804bb.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="navbar">
        <h1>Add Product</h1>
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
                <a href="view_all_posts.php">View all Posts</a>
                <a href="create_post.php">Create Posts</a>
            </div>
            <a href="view_profile.php">View Profile</a>
            <a href="../controllers/php/log_out.php">Log out</a>
        </div>
        <div class="main">
            <form action="../controllers/php/add_product_validation.php" method="POST" enctype="multipart/form-data"
                  onsubmit="return validateForm()">
                <fieldset>
                    <label for="name" class="label">Name : </label>
                    <input type="text" name="name" id="name">
                    <small id="invalid_name_error_message"></small>
                    <hr>
                    <label for="price" class="label">Price : </label>
                    <input type="number" name="price" id="price">
                    <small id="invalid_price_error_message"></small>
                    <hr>
                    <label for="availability">Availability : </label>
                    <select name="availability" id="availability">
                        <option value="In stock">In Stock</option>
                        <option value="Stock out">Stock Out</option>
                    </select>
                    <hr class="availability_hr">
                    <label for="description" class="label">Description : </label>
                    <input type="text" name="description" id="description">
                    <small id="invalid_description_error_message"></small>
                    <hr>
                    <label for="plantImage" class="label">Image: </label>
                    <input type="file" name="plantImage" id="plant_image">
                    <small id="invalid_plant_image_error_message"></small>
                    <hr>
                    <label for="shopName" class="label">Shop name: </label>
                    <input type="text" name="shopName" id="shop_name">
                    <small id="invalid_shop_name_error_message"></small>
                    <hr>
                    <input type="submit" value="Add">
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
<script type="text/javascript" src="../controllers/js/add_product_validation.js">
</script>
</body>
</html>