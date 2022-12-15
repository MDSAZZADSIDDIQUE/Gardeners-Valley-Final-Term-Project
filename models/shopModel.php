<?php
require_once "database.php";

function insertShop ($shop) {
    $connection = getConnection();
    $sql = "INSERT INTO shops_information (shop_name, shop_address, shop_owner, shop_image) VALUES ('{$shop['shopName']}', '{$shop['shopAddress']}', '{$shop['shopOwner']}', '{$shop['shopImage']}')";
    $status = mysqli_query($connection, $sql);
    return $status;
}

function deleteShop ($shopID) {
    $connection = getConnection();
    $sql = "DELETE FROM shops_information WHERE shop_id='{$shopID}'";
    $status = mysqli_query($connection, $sql);
    return $status;
}