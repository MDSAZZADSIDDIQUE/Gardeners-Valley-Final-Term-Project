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
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="icon" href="../assets/images/Free Logo Beauty Hijab.png">
    <script src="https://kit.fontawesome.com/6163e804bb.js" crossorigin="anonymous"></script>
    <title>Shop</title>
</head>
<body>
<div class="container">
    <div class="navbar">
        <a href="../index.php"><img src="../assets/images/Free Logo Beauty Hijab.png" alt="" class="logo"></a>
        <nav>
            <ul>
                <li><a href=""><i class="fa-solid fa-cart-shopping fa-2xl"></i></a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="news_feeed.php">Discover</a></li>
                <li><a href="profile.php"><i class="fa-solid fa-user fa-2xl"></i></a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="smallContainer">


     <form action="../controllers/php/add_plant.php" method="post">
         <label for="plant" class="plant">Add Plant</label>
         <br>
         <input type="text" name="plant" id="plant">
         <br>
         <input type="submit" id="add_plant" value="Add">
     </form>
</div>
<?php
include_once "../views/footer.php";
?>
</body>
</html>