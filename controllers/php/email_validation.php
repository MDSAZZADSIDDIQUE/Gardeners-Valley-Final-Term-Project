<?php
include_once 'empty_input_validation.php';
function checkEmail($email) {
    return strlen($email) < 6 || !strpos($email, '@') || !strpos($email, '.') || strpos($email, '@') < 1 || strpos($email, '.') < 3 || (strpos($email, '.') - strpos($email, '@')) < 2;
}
