<?php


namespace Utility;


class Header
{

    public static function locationRouter($route, $delay = 0)
    {
        global $router;
        $location = $router->generate($route);
        header("Refresh:{$delay}; url={$location}");
    }

}