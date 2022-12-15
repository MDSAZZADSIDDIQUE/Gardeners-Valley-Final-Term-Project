<?php

include_once "../../models/database.php";
include_once "show_all_users.php";

$userID = $_GET['userID'];
$connection = getConnection();
$sql = "SELECT * FROM products_information WHERE product_id='{$userID}'";
$productsInformation = mysqli_query($connection, $sql);
while ($productInformation = mysqli_fetch_array($productsInformation)) {
    $name = $productInformation[1];
    $price = $productInformation[2];
    $availability = $productInformation[3];
    $plantImage = $productInformation[5];
    $shopName = $productInformation[6];
}

echo "<p>Product ID: {$userID}</p><br>";
echo "<p>Product Name: {$name}</p><br>";
echo "<p>Price: {$price}</p><br>";
echo "<p>Availability: {$availability}</p><br>";
echo "<p>Plant Image: {$plantImage}</p><br>";
echo "<p>Shop Address {$shopName}</p><br>";
echo "<button class='deleteButton' onclick='deletingProduct($userID)'>Delete</button>";
echo "<button class='cancelButton' onclick='cancelDeletion($userID)'>Cancel</button>";