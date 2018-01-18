<?php

$token = $_GET['token'];

$errmsg = '';

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password_confirm'];

    if($password == $password2) {
        return (new \Church\CMS\Authentication())->resetPassword($token, $email, $password);

//        $response = json_decode($response, true);
    }

    else {
        $errmsg = "password does not match.";
    }
}

require resource_view('reset-password');

