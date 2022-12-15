<?php
require_once "../../models/database.php";
$email = $_POST['email'];
$password = $_POST['password'];
$connection = getConnection();
$sql = "UPDATE user_information SET password = '{$password}' WHERE email_address='{$email}'";
$status = mysqli_query($connection, $sql);
header('location: ../../views/login.php');