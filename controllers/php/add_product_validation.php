<?php
require_once "../../models/productModel.php";
$name = $_POST['name'];
$price = $_POST['price'];
$availability = $_POST['availability'];
$description = $_POST['description'];
$shopName = $_POST['shopName'];

$source = $_FILES['plantImage']['tmp_name'];
$destination = "../../assets/images/".$_FILES['plantImage']['name'];
move_uploaded_file($source, $destination);

$product = ['name' => $name, 'price' => $price, 'availability' => $availability, 'description' => $description, 'plantImage' => $destination, 'shopName' => $shopName];
$status = insertProduct($product);
header('location: ../../views/view_all_products.php');
