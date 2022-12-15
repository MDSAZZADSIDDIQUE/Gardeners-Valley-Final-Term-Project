<?php
require_once "database.php";
function insertProduct ($product) {
    $connection = getConnection();
    $sql = "INSERT INTO products_information (name, price, availability, description, plant_image, shop_name) VALUES ('{$product['name']}', '{$product['price']}', '{$product['availability']}', '{$product['description']}', '{$product['plantImage']}', '{$product['shopName']}')";
    $status = mysqli_query($connection, $sql);
    return $status;
}

function deleteProduct ($productID) {
    $connection = getConnection();
    $sql = "DELETE FROM products_information WHERE product_id='{$productID}'";
    $status = mysqli_query($connection, $sql);
    return $status;
}