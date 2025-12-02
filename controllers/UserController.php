<?php

include "../services/validation.php";
include "../services/crud.php";

$usersJsonFile = realpath(__DIR__ . '/../data/users.json');

function register($usersJsonFile)
{
    $user = [];
    $user['name'] = htmlSafe($_POST['name']);
    $user['email'] = htmlSafe($_POST['email']);
    $user['password'] = trim($_POST['password']);
    $user['confirm_password'] = trim($_POST['confirm_password']);

    $errors = [];


    foreach ($user as $key => $val) {
        requiredCheck($key, $val, $errors);
    }


    if (empty($errors['name'])) {
        nameValidation($user['name'], $errors);
    }


    if (empty($errors['email'])) {
        emailValidation($user['email'], $errors);
    }


    // if (empty($errors['password'])) {
    //     passwordValidation($user['password'], $user['confirm_password'], $errors);
    // }

    if (empty($errors)) {
        $_SESSION['user'] = $user;
        create($usersJsonFile, $user); 
        header("Location: /");
        exit;
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: /register");
        exit;
    }
}

function login($usersJsonFile)
{
    $email = htmlSafe($_POST['email']);
    $password = trim($_POST['password']);

    $errors = [];

    requiredCheck('email', $email, $errors);
    requiredCheck('password', $password, $errors);

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: /login");
        exit;
    }

    $file = json_decode(file_get_contents($usersJsonFile), true);

    $found = false;
    foreach ($file as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $_SESSION['user'] = $user; 
            $found = true;
            header("Location: /");
            exit;
        }
    }

    if (!$found) {
        $_SESSION['errors']['login'] = "Invalid email or password";
        header("Location: /login");
        exit;
    }
}

function logout()
{
    session_unset();
    session_destroy();
    header("Location: /");
    exit;
}
