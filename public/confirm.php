<?php

$token = $_GET['token'];

(new \Church\CMS\Authentication())->confirmAccount($token);
