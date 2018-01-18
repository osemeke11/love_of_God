<?php

use Church\Data\DB;
$db = new DB();
$getPastorNote = $db->getAllDataWhere("pages", "page = 'pastor-note'");

include resource_view("index");
