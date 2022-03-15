<?php

$router->map('GET', '/', "home", "home");
$router->map('GET', '/la-carte', "carte", "carte");
$router->map('GET', '/les-menus', "menus", "menus");
$router->map('GET', '/livraisons', "livraisons", "livraisons");

$router->map( 'GET', '/404', "404", "404");