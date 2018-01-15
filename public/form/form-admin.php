<?php
// Login
if(isset($_POST['admin_email']) && isset($_POST['admin_password'])){
    $email = test_input($_POST['admin_email']);
    $password = test_input($_POST['admin_password']);
//    $loginValidate = $db->getAllDataWhere("admin", );
//    var_dump($loginValidate); die();
    $loginValidate = $form->checkEmailPass("admin", "admin_email = '$email' AND password = '$password'");
    if(!empty($form->error)){
        foreach ($form->error as $error) {
            echo '<li>' . $error . '</li>';
        }
    }
    else{
        $getAdminData = $db->getAllDataWhere('admin', "admin_email = '$email' AND password = '$password'");
        foreach ($getAdminData as $row) {
            $_SESSION['admin']['user_ID'] = $row['id'];
            $_SESSION['admin']['email'] = $row['admin_email'];
        }
        echo true;
    }
}

// Edit About Us
if(isset($_POST['edit-about'])){
    $message = $form->messageDetails(test_input($_POST["edit-about"]), 5000, 5);
    if(!empty($form->error)){
        foreach ($form->error as $error) {
            echo '<li>' . $error . '</li>';
        }
    }
    else{
        $condition = "page_content = '$message'";
        if($db->updateData("pages",$condition, "page = 'about'") !== false){
            echo "Update Successfully!";
        }
    }
}

// Edit About Us
if(isset($_FILES['add_gallery']['name'])){
    $uploads_dir = dirname(dirname(dirname(__FILE__))) . "/resources/assets/images";
    $tmp_name = $_FILES["add_gallery"]["tmp_name"];
    $name = basename($_FILES["add_gallery"]["name"]);
//    echo $uploads_dir;
    if(move_uploaded_file($tmp_name, $uploads_dir."/".$name)){
        $data = [
            'images' => $name
        ];
        if($db->addData("gallery", $data) !== false){
            echo "File Uploaded Successfully!";
        }
    }
}

// Add Bible Verses
if(isset($_POST['verse']) && isset($_POST['bible-content'])){
    $bible =test_input($_POST["verse"]);
    $day = test_input($_POST['day']);
    $message = $form->messageDetails(test_input($_POST["bible-content"]), 5000, 5);
    if(!empty($form->error)){
        foreach ($form->error as $error) {
            echo '<li>' . $error . '</li>';
        }
    }
    else{
        $data = [
            'bible_verse' => $bible,
            'bible_content' => $message,
            'day' => $day
        ];
        if($db->addData("bible_verse", $data) !== false){
            echo "Added Successfully!";
        }
    }
}