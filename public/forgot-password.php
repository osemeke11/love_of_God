<?php

$errmsg = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];

    (new \Church\CMS\Authentication())->forgotPassword($email);

    echo "An Email has ben sent to you. Follow that.";

    header("Location: " . url('sign-in'));

    exit();
}

include resource_view('forgot-password');