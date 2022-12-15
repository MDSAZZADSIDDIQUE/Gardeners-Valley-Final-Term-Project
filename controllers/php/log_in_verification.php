<?php
require_once "../../models/userModel.php";
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
if (isset($_POST['rememberMe'])) {
    $rememberMe = $_POST['rememberMe'];
}

$user = ['emailAddress' => $emailAddress, 'password' => $password];
$status = login_verification($user);
$role = '';
$firstName = '';
$lastName = '';
$gender = '';
$dateOfBirth = '';
if ($status)
{
    if(isset($rememberMe)) {
        setcookie('rememberMe', true, time() + 3600, true);
    }
    $sql = "SELECT * FROM user_information";
    $connection = mysqli_connect('localhost', 'root', '', 'gardeners_valley');
    $usersInformation = mysqli_query($connection, $sql);
    while ($userInformation = mysqli_fetch_array($usersInformation)) {
        if ($emailAddress == $userInformation[6]) {
            $firstName = $userInformation[1];
            $lastName = $userInformation[2];
            $gender = $userInformation[3];
            $dateOfBirth = $userInformation[4];
            $role = $userInformation[5];
        }
    }
    setcookie('firstName', $firstName, time() + 36000, '/');
    setcookie('lastName', $lastName, time() + 36000, '/');
    setcookie('gender', $gender, time() + 36000, '/');
    setcookie('dateOfBirth', $dateOfBirth, time() + 36000, '/');
    setcookie('emailAddress', $emailAddress, time() + 36000, '/');
    setcookie('password', $password, time() + 36000, '/');
    setcookie('status', true, time() + 36000, '/');
    if ($role == 'Admin') {
        header("location: ../../views/admin_panel.php");
    } else if ($role == 'Buyer') {
        header("location: ../../views/buyer_panel.php");
    } else if ($role == 'Seller') {
        header("location: ../../views/seller_panel.php");
    } else if ($role == 'Expert') {
        header("location: ../../views/expert_panel.php");
    } else if ($role == 'Delivery man') {
        header("location: ../../views/delivery_man_panel.php");
    }
} else {
    ?>
    <script>
        window.location.href = "../../views/log_in.php?error=unmatchedPassword";
    </script>
    <?php
}