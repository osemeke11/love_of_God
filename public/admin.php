<?php
use Church\Router;
use Church\Data;

$user = (new \Church\CMS\Authentication())->authUser();


if(!is_null($user)) {
    $page = (strlen(Router::$key) > 0) ? Router::$key : "index";

    if(file_exists(resource_admin($page))){

        include resource_admin($page);
        exit();
    }
    else {
        header("Location:" . url('404'));
    }
}
else {
    return header("Location:" . url('sign-in'));

}



