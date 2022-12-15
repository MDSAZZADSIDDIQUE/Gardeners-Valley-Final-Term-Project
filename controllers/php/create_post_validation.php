<?php
require_once "../../models/postModel.php";
include_once "get_time.php";

$title = $_POST['title'];
$content = $_POST['content'];
$time = getTime();
$author = $_COOKIE['lastName'];

$source = $_FILES['postImage']['tmp_name'];
$destination = "../../assets/images/" . $_FILES['postImage']['name'];
move_uploaded_file($source, $destination);

$post = ['title' => $title, 'author' =>  $author, 'postImage' => $destination, 'content' => $content, 'time' => $time];
createPost($post);
header('location: ../../views/view_all_posts.php');

