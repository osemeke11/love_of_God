<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        (new \Church\CMS\Authentication())->login($email, $password);


//        if(!empty($form->error)){
//            foreach ($form->error as $error) {
//                echo '<li>' . $error . '</li>';
//            }
//        }
//        else{
//            $getAdminData = $db->getAllDataWhere('admin', "admin_email = '$email' AND password = '$password'");
//            foreach ($getAdminData as $row) {
//                $_SESSION['admin']['user_ID'] = $row['id'];
//                $_SESSION['admin']['email'] = $row['admin_email'];
//            }
//            echo true;
//        }
//        header("Location:" .url('admin'));
        exit();
    }

    require resource_view('login');


