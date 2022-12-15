<?php
require_once "../../models/database.php";
$email = $_COOKIE['emailAddress'];
$plant = $_POST['plant'];
$connection = getConnection();
$sql = "INSERT INTO buyers_plant (email, plant) VALUES ('$email', '$plant')";
$status = mysqli_query($connection, $sql);
header('location: ../../views/buyer_panel.php');
