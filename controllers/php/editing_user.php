<?php
require_once '../../models/database.php';
$userID = $_GET['userID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$dateOfBirth = $_POST['dateOfBirth'];
$role = $_POST['role'];
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$connection = getConnection();
$sql = "UPDATE user_information SET first_name = '{$firstName}', last_name = '{$lastName}', gender = '{$gender}', date_of_birth = '{$dateOfBirth}', role = '{$role}', email_address = '{$emailAddress}', password = '{$password}' WHERE user_id='{$userID}'";
$status = mysqli_query($connection, $sql);
header('location: ../../views/view_all_users.php');