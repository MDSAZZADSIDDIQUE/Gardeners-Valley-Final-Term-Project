<?php
include_once "../../models/userModel.php";
$userID = $_GET['userID'];
deleteUser($userID);
header('Location: ../../views/view_all_users.php');

