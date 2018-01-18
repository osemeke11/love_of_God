<?php

use Church\Router;
use Church\Data\DB;
$page = (strlen(Router::$key) > 0) ? Router::$key : "index";

if(file_exists(resource_partial('messages/'.$page))){

    include resource_partial('messages/'.$page);


}
else {
    header("Location:" . url('404'));
}