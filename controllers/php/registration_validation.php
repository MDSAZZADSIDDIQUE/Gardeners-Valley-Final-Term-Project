<?php
include_once "empty_input_validation.php";
include_once "name_validation.php";
include_once "password_validation.php";
include_once "email_validation.php";
require_once "../../models/userModel.php";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$dateOfBirth = $_POST['dateOfBirth'];
$role = $_POST['role'];
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if (checkInput($firstName) || checkInput($lastName) || checkInput($gender) || checkInput($dateOfBirth) || checkInput($emailAddress) || checkInput($password) || checkInput($confirmPassword) || checkName($firstName) || checkName($lastName) || checkEmail($emailAddress) || checkPassword($password) || $password != $confirmPassword) {
    header('location: ../../views/log_in.php');
} else {
    $user = ['firstName' => $firstName, 'lastName' => $lastName, 'gender' => $gender, 'dateOfBirth' => $dateOfBirth, 'role' => $role, 'emailAddress' => $emailAddress, 'password' => $password];
    $status = insertUser($user);

    $_SESSION['jsonuser'] = json_encode($user);
    setcookie('firstName', $firstName, time() + 36000, '/');
    setcookie('lastName', $lastName, time() + 36000, '/');
    setcookie('gender', $gender, time() + 36000, '/');
    setcookie('dateOfBirth', $dateOfBirth, time() + 36000, '/');
    setcookie('emailAddress', $emailAddress, time() + 36000, '/');
    setcookie('password', $password, time() + 36000, '/');
    setcookie('status', true, time() + 36000, '/');
    header('location: ../../views/buyer_panel.php');
}
