<?php

require_once('database.php');
require_once('UserDB.php');

$userName = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

$upperCase = '/[A-Z]/';
$lowerCase = '/[a-z]/';
$number = '/[0-9]/';
$startWithLetters = '/^[a-zA-Z]/';
$passwordLength = '/^[a-zA-Z][a-zA-Z0-9]{3,29}$/';


$isValidPass = true;
if ($password === '') {
    $isValidPass = false;
    $passwordError = "Password is required";
} elseif (preg_match($upperCase, $password)!=1) {
    $isValidPass = false;
    $passwordError = "Password must have Upper case";
} elseif (preg_match($lowerCase, $password)!=1) {
    $isValidPass = false;
    $passwordError = "must contain lower case letters";
} else if (preg_match($number, $password)!=1) {
    $isValidPass = false;
    $passwordError = "Must contain numbers";
} elseif (preg_match('/[!@#$%^&*;:,<.>]+/', $password)!=1) {
    $isValidPass = false;
    $passwordError = "Must contain special characters";
} elseif (!preg_match($passwordLength, $password)!=1) {
    $isValidPass = false;
    $passwordError = "Must be 10 characters long";
}

$isValid = true;
if ($userName === '' || !preg_match('/^[a-zA-Z][a-zA-Z0-9]{3,31}$/', $userName)) {
    $isValid = false;
    $userNameError = 'User Name field cannot be blank';
    if (!preg_match('/^[a-zA-Z][a-zA-Z0-9]{3,31}$/', $userName)) {
        $isValid = false;
        $userNameError = 'User name must be 4 to 30 characters';
    }
}

//verified if user name already exist
if ($userName === UserDB::checkUsername($userName)) {
    $userNameError = 'User Name is taken';
    $isValid = false;
}

if ($isValidPass === false) {
    include('registration.php');
    exit();
}
if ($isValid === false) {
    include('registration.php');
    exit();
}
