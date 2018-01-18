<?php
use Church\Data\DB;
$db = new DB();
$getAboutUs = $db->getAllDataWhere("pages", "page = 'about'")[0];

include resource_view("about");

