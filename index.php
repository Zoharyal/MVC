<?php
require_once('vendor/autoload.php');
require('./config/config.php');

use Helper\RouteHelper as Router; 

// var_dump($GLOBALS['config']);

$router = new Router();
$router->route();