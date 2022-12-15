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
    <link rel="stylesheet" href="../assets/css/news_feed_style.css">
    <link rel="icon" href="../assets/images/Free Logo Beauty Hijab.png">
    <script src="https://kit.fontawesome.com/6163e804bb.js" crossorigin="anonymous"></script>
    <title>News Feed</title>
</head>
<body>
<div class="container">
    <div class="navbar">
        <a href="../index.php"><img src="../assets/images/Free Logo Beauty Hijab.png" alt="" class="logo"></a>
        <nav>
            <ul>
                <li><a href=""><i class="fa-solid fa-cart-shopping fa-5px"></i></a></li>
                <li><a href="views/shop.php">Shop</a></li>
                <li><a href="">Discover</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="log_in.php">Log in</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="smallContainer">
    <h2 class="title">Posts</h2>
    <div class="row">
        <?php
        $sql = "SELECT * FROM posts";
        $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
        $posts = mysqli_query($connection, $sql);
        while ($post = mysqli_fetch_array($posts)) {
            echo "<div class='product'>";
            echo "<hr>";
            echo "<h4>$post[1]</h4>";
            echo "<hr>";
            echo "<h4>Author: $post[2]</h4>";
            echo "<hr>";
            echo "<img src='$post[3]'>";
            echo "<hr>";
            echo "<p>$post[4]</p>";
            echo "<hr>";
            echo "<p>Time: $post[5]</p>";
            echo "<hr>";
            echo "<button><i  class='fa-regular fa-heart fa-2xl'></i></button>";
            echo "</div>";
        }
        ?>
    </div>
</div>
<?php
include_once "../views/footer.php";
?>
<script>
</script>
</body>
</html>