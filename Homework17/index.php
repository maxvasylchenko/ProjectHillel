<?php
session_start();
require './vendor/autoload.php';
use Core\Router;
$obj = new Router();
$obj->run();