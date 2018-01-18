<?php

    $errmsg = '';

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

       $errmsg = (new \Church\CMS\Authentication())->login($email, $password);

    }

    require resource_view('login');


