<?php

use Church\Data\DB;
use Church\Services\FormValidate;
use Church\Services\SendMail;

$db = new DB();
$form = new FormValidate;
$msg = new SendMail();


include public_path('form/feedback.php');
include public_path('form/form-admin.php');