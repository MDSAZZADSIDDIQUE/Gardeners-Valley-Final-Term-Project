<?php
setcookie('firstName', "", time() - 36000, '/');
setcookie('lastName', "", time() - 36000, '/');
setcookie('gender', "", time() - 36000, '/');
setcookie('dateOfBirth', "", time() - 36000, '/');
setcookie('emailAddress', "", time() - 36000, '/');
setcookie('password', "", time() - 36000, '/');
setcookie('status', true, time() - 36000, '/');
header('location: ../../views/log_in.php');