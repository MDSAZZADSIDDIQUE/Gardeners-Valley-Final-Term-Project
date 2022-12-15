<?php
require_once "../../models/productModel.php";
$productID = $_GET['shopID'];
$name = $_POST['name'];
$price = $_POST['price'];
$availability = $_POST['availability'];
$description = $_POST['description'];
$shopName = $_POST['shopName'];
$connection = getConnection();
$sql = "UPDATE products_information SET name = '{$name}', price = '{$price}', availability = '{$availability}', description = '{$description}', shop_name = '{$shopName}' WHERE product_id='{$productID}'";
$status = mysqli_query($connection, $sql);
header('location: ../../views/view_all_products.php');
