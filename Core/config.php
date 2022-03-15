<?php

use App\App;
use Sql\PDO;

session_start();

setlocale(LC_TIME, "fr_FR", "French");
date_default_timezone_set('Europe/Paris');

define('PATH', dirname(realpath(__DIR__)));
define('CORE_PATH', PATH . "/Core/");
define('VIEW_PATH', PATH . "/View/");
define('MODEL_PATH', PATH . "/Model/");
define('CONTROLLER_PATH', PATH . "/Controller/");

require MODEL_PATH . "App/Autoloader.php";

Autoloader::register();

$env = (in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) ? 'DEV' : 'PROD';

define('ENV', $env);

require "$env.conf.php";

PDO::setter([
    'user' => DB['user'],
    'password' => DB['password'],
    'dbName' => DB['dbName'],
    'host' => DB['host']
]);

$app = new App('BlankProject', true);
$app->verifMethod();

define('URL', $app->getUrl());
define('JS_URL', URL . '/js/');
define('CSS_URL', URL . '/css/');
define('IMG_URL', URL . '/img/');