<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        (new \Church\CMS\Authentication())->login($email, $password);

        exit();
    }

    require resource_view('login');


