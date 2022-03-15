<?php

use App\AltoRouter;
use App\Page;

require_once dirname(realpath(__DIR__)) . "/Core/config.php"; //include the config of the app

$router = new AltoRouter(); //add the router
require_once CORE_PATH . "routes.php"; //require all app routes

$match = $router->match(); //get the matching array

$p = (is_array($match)) ? [$match['target'], $match['params']] : ['404', []]; //Define the parameters by the matching
$page = new Page($p[0], $p[1]); //Set the page parameters

ob_start(); //Turn on output buffering
if (is_callable($page->getTarget())) //if target is a function
    call_user_func_array($page->getTarget(), $page->getParams()); //execute it
else {
    require CONTROLLER_PATH . ucfirst($page->getTarget()) . ".php";//else require the controller of the target
    $viewFile = VIEW_PATH . ucfirst($page->getTarget()) . '.php'; //View file
    if (is_file($viewFile)) //if view exist
        require $viewFile; //include it
}

$page->setContent(ob_get_clean()); //set the content of the page
require VIEW_PATH . 'template/' . $page->getTemplate(); //include the template for the asked page