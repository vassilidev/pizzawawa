<?php

class Autoloader
{

    /**
     * Enregistre notre autoloader
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, "autoload"));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class)
    {
        $parts = explode('\\', $class);
        $class = [
            'namespace' => (!empty($parts[1])) ? $parts[0] . '/' : '',
            'className' => ucfirst(end($parts)) . '.php'
        ];
        require_once(MODEL_PATH . $class['namespace'] . $class['className']);
    }

}