<?php
$host = "localhost";
$databaseName = "gardeners_valley";
$databasePassword = "";
$databaseUser = "root";

function getConnection() {
    global $host;
    global $databaseName;
    global $databasePassword;
    global $databaseUser;
    return mysqli_connect($host, $databaseUser, $databasePassword, $databaseName);
}