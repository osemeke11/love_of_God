<?php

use Church\Data\DB;
use Church\Services\FormValidate;
use Church\Services\SendMail;
use Church\Auth\User;

$db = new DB();
$form = new FormValidate;
$msg = new SendMail();
$user = new User();


include public_path('form/feedback.php');
include public_path('form/form-admin.php');