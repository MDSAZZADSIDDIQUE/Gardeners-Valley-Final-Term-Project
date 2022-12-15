<?php

include_once "../../models/productModel.php";
$productID = $_GET['productID'];
deleteProduct($productID);
header('Location: ../../views/view_all_products.php');