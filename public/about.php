<?php
use Church\Data\DB;
$db = new DB();
$getAboutUs = $db->getAllDataWhere("pages", "page = 'about'");

include resource_view("about");

