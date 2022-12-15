<?php

include_once "../../models/database.php";
include_once "show_all_users.php";

$userID = $_GET['postID'];
$connection = getConnection();
$sql = "SELECT * FROM posts WHERE post_id='{$userID}'";
$productsInformation = mysqli_query($connection, $sql);
while ($productInformation = mysqli_fetch_array($productsInformation)) {
    $id = $productInformation[0];
    $title = $productInformation[1];
    $content = $productInformation[3];
    $time = $productInformation[4];
}

echo "<p>Post ID: {$userID}</p><br>";
echo "<p>Post Name: {$title}</p><br>";
echo "<p>Post Content: {$content}</p><br>";
echo "<p>Post Time: {$time}</p><br>";
echo "<button class='deleteButton' onclick='deletingPost($userID)'>Delete</button>";
echo "<button class='cancelButton' onclick='cancelDeletion($userID)'>Cancel</button>";