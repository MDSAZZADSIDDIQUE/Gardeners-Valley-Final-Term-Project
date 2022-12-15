<?php
include_once "../../models/database.php";
include_once "show_all_users.php";

$userID = $_GET['userID'];
$connection = getConnection();
$sql = "SELECT * FROM user_information WHERE user_id='{$userID}'";
$usersInformation = mysqli_query($connection, $sql);
while ($userInformation = mysqli_fetch_array($usersInformation)) {
    $userID = $userInformation[0];
    $firstName = $userInformation[1];
    $lastName = $userInformation[2];
    $gender = $userInformation[3];
    $dateOfBirth = $userInformation[4];
    $role = $userInformation[5];
    $emailAddress = $userInformation[6];
}

echo "<p>User ID: {$userID}</p><br>";
echo "<p>First Name: {$firstName}</p><br>";
echo "<p>Last Name: {$lastName}</p><br>";
echo "<p>Gender: {$gender}</p><br>";
echo "<p>Date of Birth: {$dateOfBirth}</p><br>";
echo "<p>Role: {$role}</p><br>";
echo "<p>Email Address: {$emailAddress}</p><br>";
echo "<button class='deleteButton' onclick='deletingUser($userID)'>Delete</button>";
echo "<button class='cancelButton' onclick='cancelDeletion($userID)'>Cancel</button>";