<?php
session_start();
require_once "../../models/database.php";
$connection = getConnection();
$price = $_SESSION['price'];
$sql = "INSERT INTO earnings (earning) VALUES ('{$price}')";
$status = mysqli_query($connection, $sql);
unset($_SESSION['price']);
header('location: ../../views/buyer_shop.php');