<?php 

function htmlSafe($input)
{
    return htmlspecialchars(trim($input));
}



function requiredCheck($fieldName , $val , &$errors) {
    if(empty($val)){
        $errors[$fieldName] = "$fieldName is required";
    }
}
function nameValidation($name , &$errors) {
    if(strlen($name)<3){
        $errors['name'] = "Name must be at least 3 chars";
    }else if(strlen($name)>20){
        $errors['name'] = "Name must be at most 20 chars";
    }else if(!preg_match("/^[a-zA-Z\s-]+$/", $name)) {
    $errors['name'] = "Name must contain letters, spaces or hyphens only";
    }
}

function emailValidation($email , &$errors) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }else if (strlen($email) > 60) {
        $errors['email'] = "Email must not exceed 60 characters";
    }
}

function passwordValidation($password , $confirm_password, &$errors) {
    if ($password !== $confirm_password) {
        $errors['password'] = "Password not match";
    }else if (strlen($password) < 8) {
        $errors['password'] = "Password must be at least 8 characters";
    }else if(strlen($password) > 20){
        $errors['password'] = "Password must be less than 20 characters";
    }else if (!preg_match("/[A-Z]/", $password)) {
        $errors['password'] = "Password must contain at least one uppercase letter";
    }else if (!preg_match("/[a-z]/", $password)) {
        $errors['password'] = "Password must contain at least one lowercase letter";
    }else if (!preg_match("/[0-9]/", $password)) {
        $errors['password'] = "Password must contain at least one number";
    }else if (!preg_match("/[\W_]/", $password)) {
        $errors['password'] = "Password must contain at least one special character";
    }
}

