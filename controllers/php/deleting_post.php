<?php

include_once "../../models/postModel.php";
$productID = $_GET['postID'];
deleteProduct($productID);
header('Location: ../../views/view_all_posts.php');