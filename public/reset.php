<?php

$token = $_GET['token'];

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password_confirm'];

    if($password == $password2) {
        (new \Church\CMS\Authentication())->resetPassword($token, $email, $password);
    }

    else {
        echo "password does not match.";
    }
}

require resource_view('reset-password');

