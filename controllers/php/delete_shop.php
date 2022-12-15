<?php
include_once "../../models/database.php";
include_once "show_all_users.php";

$shopID = $_GET['shop_id'];
$connection = getConnection();
$sql = "SELECT * FROM shops_information WHERE shop_id='{$shopID}'";
$shopsInformation = mysqli_query($connection, $sql);
while ($shopInformation = mysqli_fetch_array($shopsInformation)) {
    $name = $shopInformation[1];
    $address = $shopInformation[2];
    $owner = $shopInformation[3];
}

echo "<p>Shop ID: {$shopID}</p><br>";
echo "<p>Shop Name: {$name}</p><br>";
echo "<p>Shop Address: {$address}</p><br>";
echo "<p>Shop Owner: {$owner}</p><br>";
echo "<button class='deleteButton' onclick='deletingShop($shopID)'>Delete</button>";
echo "<button class='cancelButton' onclick='cancelDeletion($shopID)'>Cancel</button>";