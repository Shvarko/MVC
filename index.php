<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<?php
// FRONT COTROLLER

// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));  // содержит путь от текущего каталога
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

// 3. Установка соединения с БД


// 4. Вызор Router

$router = new Router();
$router->run();
?>