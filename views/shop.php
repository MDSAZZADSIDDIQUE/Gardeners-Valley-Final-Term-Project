
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/shop.css">
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
                <li><a href=""><i class="fa-solid fa-cart-shopping fa-5px"></i></a></li>
                <li><a href="views/shop.php">Shop</a></li>
                <li><a href="news_feeed.php">Discover</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="log_in.php">Log in</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="smallContainer">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <?php
        $sql = "SELECT * FROM products_information";
        $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
        $productsInformation = mysqli_query($connection, $sql);
        while ($productInformation = mysqli_fetch_array($productsInformation)) {
            echo "<div class='product'>";
            echo "<img src='$productInformation[5]'>";
            echo "<h4>$productInformation[1]</h4>";
            echo "<p>$productInformation[2]</p>";
            echo "<p>$productInformation[3]</p>";
            echo "<div class='rating'>";
            echo "<i class='fa-solid fa-star'></i>";
            echo "<i class='fa-solid fa-star'></i>";
            echo "<i class='fa-solid fa-star'></i>";
            echo "<i class='fa-regular fa-star'></i>";
            echo "<i class='fa-regular fa-star fa-5px'></i>";
            echo "</div>";
            echo "<button class='addToCart' onclick='myFunction()'>Add to Cart</button>";
            echo "</div>";
        }
        ?>


    </div>
</div>
<?php
include_once "../views/footer.php";
?>
<script>
    function myFunction() {
        window.location.href = 'log_in.php';
    }
</script>
</body>
</html>