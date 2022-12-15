<?php
function calculateBuyer() {
    $numberOfBuyers = 0;

    $sql = "SELECT * FROM user_information";
    $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
    $usersInformation = mysqli_query($connection, $sql);
    while ($userInformation = mysqli_fetch_array($usersInformation)) {
        if ($userInformation[5] == 'Buyer') {
            $numberOfBuyers++;
        }
    }
    return $numberOfBuyers;
}

function calculateSeller() {
    $numberOfSellers = 0;
    $sql = "SELECT * FROM user_information";
    $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
    $usersInformation = mysqli_query($connection, $sql);
    while ($userInformation = mysqli_fetch_array($usersInformation)) {
        if ($userInformation[5] == 'Seller') {
            $numberOfSellers++;
        }
    }
    return $numberOfSellers;

}

function calculateExpert() {
    $numberOfExperts = 0;
    $sql = "SELECT * FROM user_information";
    $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
    $usersInformation = mysqli_query($connection, $sql);
    while ($userInformation = mysqli_fetch_array($usersInformation)) {
        if ($userInformation[5] == 'Expert') {
            $numberOfExperts++;
        }
    }
    return $numberOfExperts;
}

function calculateDelivaryMan() {
    $numberOfDeliveryMans = 0;
    $sql = "SELECT * FROM user_information";
    $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
    $usersInformation = mysqli_query($connection, $sql);
    while ($userInformation = mysqli_fetch_array($usersInformation)) {
        if ($userInformation[5] == 'Delivery man') {
            $numberOfDeliveryMans++;
        }
    }
    return $numberOfDeliveryMans;
}