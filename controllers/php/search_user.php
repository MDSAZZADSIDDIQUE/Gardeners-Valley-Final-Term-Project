<?php
session_start();
require_once '../../models/database.php';
include_once 'show_all_users.php';
$searchString = $_GET['searchString'];
$sql = "SELECT * FROM user_information";
$connection = getConnection();
$usersInformation = mysqli_query($connection, $sql);
$userID = 0;
$temporaryNumber = 0;
$searchFound = false;
while ($userInformation = mysqli_fetch_array($usersInformation)) {
    for ($i = 0; $i < 8; $i++) {

        if ($userInformation[$i] == $searchString) {
            $userID = $temporaryNumber;
            $searchFound = true;
            break;
        }
    }
    $temporaryNumber++;
}

if ($searchFound) {
    echo $userID;
} else {
    echo 'Not found';
}

