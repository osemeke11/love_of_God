<?php

use Church\Router;

date_default_timezone_set("Africa/Lagos");
session_start();

require __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();


// $tracker = new VisitorTracker;
$url = explode("/", $_SERVER['REQUEST_URI']);
$route = new Router($url);
