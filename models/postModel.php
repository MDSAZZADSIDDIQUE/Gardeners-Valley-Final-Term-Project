<?php
require_once "database.php";

function createPost ($post) {
    $connection = getConnection();
    $sql = "INSERT INTO posts (title, author, post_image, content, time) VALUES ('{$post['title']}', '{$post['author']}', '{$post['postImage']}', '{$post['content']}', '{$post['time']}')";
    $status = mysqli_query($connection, $sql);
    return $status;
}

function deleteProduct ($postID) {
    $connection = getConnection();
    $sql = "DELETE FROM posts WHERE post_id='{$postID}'";
    $status = mysqli_query($connection, $sql);
    return $status;
}