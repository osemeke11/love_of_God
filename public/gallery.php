<?php
use Church\Data\DB;
$db = new DB();
$getImages = $db->getAllData("gallery");
$totalImages = count($getImages);

include resource_view("gallery");
