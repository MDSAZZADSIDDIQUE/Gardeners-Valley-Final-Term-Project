<?php
include_once "../../models/shopModel.php";
$shopID = $_GET['shopID'];
deleteShop($shopID);
header('Location: ../../views/view_all_shop.php');