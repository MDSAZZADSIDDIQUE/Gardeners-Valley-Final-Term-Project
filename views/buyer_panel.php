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
    <link rel="stylesheet" href="../assets/css/buyer_panel.css">
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
                <li><a href="buyer_shop.php">Shop</a></li>
                <li><a href="news_feeed.php">Discover</a></li>
                <li><a href="profile.php"><i class="fa-solid fa-user fa-2xl"></i></a></li>
                <li><a href="../controllers/php/log_out.php"><i class="fa-solid fa-right-from-bracket fa-2xl"></i></a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="smallContainer">
    <?php
    $sql = "SELECT * FROM buyers_plant";
    $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
    $plants = mysqli_query($connection, $sql);
    while ($plant = mysqli_fetch_array($plants)) {
        if ($plant[1] == $_COOKIE['emailAddress']) {
            $yourPlant = $plant[2];
        }
    }
    if (!isset($yourPlant)) {
        echo "<a href class='text'>Add your planted tree</a>";
    } else {
        echo "<h1 class='message'>You have planted: $yourPlant</h1>";
        echo "<h2 class='message'>Your contribution in the environment:</h2>";
        echo "<canvas id='myChart' style='width:100%;max-width:600px'></canvas>";
    }
    ?>

</div>
<?php
include_once "../views/footer.php";
?>
<script>
    var xValues = ["Nitrogen", "Oxygen", "Carbon Dioxide", "Other Gases"];
    var yValues = [78, 21, 0.4, 0.96];
    var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",

    ];

    new Chart("myChart", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: "World Wide Wine Production 2018"
            }
        }
    });
</script>
</body>
</html>