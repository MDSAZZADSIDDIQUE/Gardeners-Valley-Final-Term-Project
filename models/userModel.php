<?php
require_once "database.php";

function login_verification($user) {
    $connection = getConnection();
    $sql = "SELECT * FROM user_information WHERE email_address='{$user['emailAddress']}' and password='{$user['password']}'";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    if($count > 0){
        return true;
    }else{
        return false;
    }
}

function insertUser ($user) {
    $connection = getConnection();
    $sql = "INSERT INTO user_information (first_name, last_name, gender, date_of_birth, role, email_address, password) VALUES ('{$user['firstName']}', '{$user['lastName']}', '{$user['gender']}', '{$user['dateOfBirth']}', '{$user['role']}', '{$user['emailAddress']}', '{$user['password']}')";
    $status = mysqli_query($connection, $sql);
    return $status;
}

function deleteUser ($user) {
    $connection = getConnection();
    $sql = "DELETE FROM user_information WHERE user_id='{$user}'";
    $status = mysqli_query($connection, $sql);
    return $status;
}