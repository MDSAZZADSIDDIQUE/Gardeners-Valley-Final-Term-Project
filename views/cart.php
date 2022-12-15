<?php
session_start();

if (!isset($_COOKIE['status'])) {
    header('location: log_in.php?error=unauthorized_access');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link rel="icon" href="../assets/images/Free Logo Beauty Hijab.png">
    <script src="https://kit.fontawesome.com/6163e804bb.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Shop</title>
</head>
<body>
<div class="container">
    <div class="navbar">
        <a href="../index.php"><img src="../assets/images/Free Logo Beauty Hijab.png" alt="" class="logo"></a>
        <nav>
            <ul>
                <li><a href="buyer_panel.php"><i class="fa-solid fa-house fa-2xl"></i></a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping fa-2xl"></i></a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="news_feeed.php">Discover</a></li>
                <li><a href="profile.php"><i class="fa-solid fa-user fa-2xl"></i></a></li>
                <li><a href="../controllers/php/log_out.php"><i class="fa-solid fa-right-from-bracket fa-2xl"></i></a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="smallContainer">
    <fieldset>
        <p class="text">Name: <?php if (isset($_SESSION['productName'])) {
            echo $_SESSION['productName'];
            }
            ?> </p>
        <p class="text">Price:<?php if (isset($_SESSION['price'])) {
                echo $_SESSION['price'];
            }
            ?>  </p>
        <p class="text">Availability:<?php if (isset($_SESSION['availability'])) {
                echo $_SESSION['availability'];
            }
                   echo "<button onclick='myFunction()'>Checkout</button>";
            ?>  </p>
    </fieldset>
</div>
<?php
include_once "../views/footer.php";
?>
<script>
    function myFunction(){
        window.location.href = "../controllers/php/add_earning.php";
    }

</script>
</body>
</html>