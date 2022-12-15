<?php
require_once "../../models/shopModel.php";
$shopName = $_POST['shopName'];
$shopAddress = $_POST['shopAddress'];
$shopOwner = $_POST['shopOwner'];

$source = $_FILES['shopImage']['tmp_name'];
$destination = "../../assets/images/" . $_FILES['shopImage']['name'];
move_uploaded_file($source, $destination);

$shop = ['shopName' => $shopName, 'shopAddress' => $shopAddress, 'shopOwner' => $shopOwner, 'shopImage' => $source];
$status = insertShop($shop);