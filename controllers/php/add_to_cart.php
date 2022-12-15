<?php
require_once "../../models/database.php";
session_start();
$productID = $_GET['productID'];
$sql = "SELECT * FROM products_information";
$connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
$productsInformation = mysqli_query($connection, $sql);
$productName = "";
$price = "";
$availability = "";
while ($productInformation = mysqli_fetch_array($productsInformation)) {
    if ($productInformation[0] == $productID) {
        $productName = $productInformation[1];
        $price = $productInformation[2];
        $availability = $productInformation[3];
        break;
    }

}
$_SESSION['productName'] = $productName;
$_SESSION['price'] = $price;
$_SESSION['availability'] = $availability;
header('location: ../../views/cart.php');