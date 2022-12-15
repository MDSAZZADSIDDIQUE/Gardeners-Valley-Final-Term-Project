<?php
require_once "../../models/productModel.php";
$productID = $_GET['productID'];
$name = $_POST['shopName'];
$address = $_POST['shopAddress'];
$owner = $_POST['shopOwner'];
    $connection = getConnection();
    $sql = "UPDATE shops_information SET shop_name = '{$name}', shop_address = '{$address}', shop_owner = '{$owner}' WHERE shop_id='{$productID}'";
    $status = mysqli_query($connection, $sql);
header('location: ../../views/view_all_products.php');
