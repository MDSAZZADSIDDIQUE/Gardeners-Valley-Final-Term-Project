<?php
if(!isset($_COOKIE['status'])) {
    header('location: log_in.php?error=unauthorized_access');
}
?>
<?php
session_start();
function calculateEarning($id) {
    require_once "../models/database.php";
    $connection = getConnection();
    $sql = "SELECT * FROM earnings";
    $earnings = mysqli_query($connection, $sql);
    while ($earning = mysqli_fetch_array($earnings)) {
        if ($earning[0] == $id)
        {
            return $earning[1];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin_panel_style.css">
    <link rel="icon" href="../assets/images/Free Logo Beauty Hijab.png">
    <title>Admin Panel</title>
    <script src="https://kit.fontawesome.com/6163e804bb.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
    </script>
</head>
<body>
<div class="container">
    <div class="navbar">
        <h1>Admin Panel</h1>
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
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
            <canvas id="myPieChart" style="width:50%;max-width:600px"></canvas>
            <canvas id="myanotherChart" style="width:70%;max-width:600px; height: 100%"></canvas>
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
</script>
<script>
    <?php include_once "../controllers/php/calculateNumberOfUsers.php";
    ?>
    let numberOfBuyers = <?php echo calculateBuyer() ?>;
    let numberOfSellers = <?php echo calculateSeller() ?>;
    let numberOfExperts = <?php echo calculateExpert() ?>;
    let numberOfDeliveryMans = <?php echo calculateDelivaryMan() ?>;
    console.log(numberOfBuyers);
    var xValues = ["Buyer", "Seller", "Expert", "Delivery Man"];
    var yValues = [numberOfBuyers, numberOfSellers, numberOfExperts, numberOfDeliveryMans];
    var barColors = ["red", "green","blue","orange"];

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Number of Users in Each Role"
            }
        }
    });
</script>
<script>
    var xValues = ["Buyers", "Sellers", "Experts", "Delivery Man"];
    var yValues = [numberOfBuyers, numberOfSellers, numberOfExperts, numberOfDeliveryMans];
    var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9"
    ];

    new Chart("myPieChart", {
        type: "pie",
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
<script>
    var yValues = [1,2,3,4,5,6,7,8,9];
    var xValues = [200,500,900,1000,1200,1400,1800,2000,2200,2400];
    new Chart("myanotherChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            scales: {
                yAxes: [{ticks: {min: 6, max:16}}],
            }
        }
    });
</script>
</body>
</html>