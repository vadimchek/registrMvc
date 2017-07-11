<?php

//общие настройки
ini_set('display_errors', 0);
error_reporting(E_ALL);

//подключений файлов

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/component/router.php');

// вызов router

$router = new Router();
$router -> run();
