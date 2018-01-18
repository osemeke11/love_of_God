<?php
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
if(isset($_POST['edit-note'])){
    $message = $form->messageDetails(test_input($_POST["edit-note"]), 5000, 5);
    if(!empty($form->error)){
        foreach ($form->error as $error) {
            echo '<li>' . $error . '</li>';
        }
    }
    else{
        $condition = "page_content = '$message'";
        if($db->updateData("pages",$condition, "page = 'pastor-note'") !== false){
            echo "Update Successfully!";
        }
    }
}

// Add Gallery
if(isset($_FILES['add_gallery']['name'])){
    $uploads_dir = dirname(dirname(dirname(__FILE__))) . "/resources/assets/images";
    $tmp_name = $_FILES["add_gallery"]["tmp_name"];
    $name = basename($_FILES["add_gallery"]["name"]);
    $caption = test_input($_POST['caption']);
//    echo $uploads_dir;
    if(move_uploaded_file($tmp_name, $uploads_dir."/".$name)){
        $data = [
            'caption' => $caption,
            'images' => $name
        ];
        if($db->addData("gallery", $data) !== false){
            echo "File Uploaded Successfully!";
        }
    }
}

// Delete an From Gallery
if(isset($_POST['delete_image'])){
    $id = $_POST['delete_image'];
    if($db->deleteData("gallery", "id = '$id'")){
        echo "Image Deleted Successfully";
    }
}

// Add Bible Verses
if(isset($_POST['verse']) && isset($_POST['bible-content'])){
    $bible = $form->checkEmpty(test_input($_POST["verse"]), "Verse");
    $day = $form->checkDateInput(test_input($_POST['day']));
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

// Edit Bible Verse
if (isset($_POST['edit_bible'])){
    $id = $_POST['id'];
    $bible = $form->checkEmpty(test_input($_POST["edit_verse"]), "Verse");
    $day = $form->checkDateInput(test_input($_POST['edit_day']));
    $message = $form->messageDetails(test_input($_POST["bible-content"]), 5000, 5);

    if(!empty($form->error)){
        foreach ($form->error as $error) {
            echo '<li>' . $error . '</li>';
        }
    }
    else{
        $condition = "bible_verse = '$bible', bible_content = '$message', day = '$day'";
        if($db->updateData("bible_verse", $condition, "id = '$id'") !== false){
            echo "Update Successfully!";
        }
    }
}

// Delete Bible Verse of the day
if(isset($_POST['delete_bible'])){
    $id = $_POST['delete_bible'];
    if($db->deleteData("bible_verse", "id = '$id'")){
        echo "Bible Deleted Successfully";
    }
}

// Add Message
$messagesClass = new \Church\CMS\Messages();
if(isset($_POST['name']) && isset($_POST['add_message'])){
    echo $messages = $messagesClass->add($_POST['name'], $_POST['add_message']);
}

// Edit Message
if(isset($_POST['edit_message'])){
    echo $messages = $messagesClass->edit($_POST['edit_name'], $_POST['message'], $_POST['id']);
}

// Delete Message
if(isset($_POST['delete_message'])){
    echo $messages = $messagesClass->delete($_POST['delete_message']);
}