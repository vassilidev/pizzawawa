<?php

namespace Item;

use Utility\Header;

class User
{
    public static $name = 'user';

    public static function isLogged()
    {
        return (!isset($_SESSION[self::$name])) ? false : true;
    }

    public static function getEmail()
    {
        return $_SESSION[self::$name]['email'];
    }

    public static function getName()
    {
        return ucfirst($_SESSION[self::$name]['name']);
    }

    public static function getSurname()
    {
        return mb_strtoupper($_SESSION[self::$name]['surname'], 'UTF-8');
    }

    public static function getAvatar()
    {
        return $_SESSION[self::$name]['avatar'];
    }

    public static function disconnect()
    {
        $_SESSION[self::$name] = [];
        unset($_SESSION[self::$name]);
        Header::locationRouter('connexion');
    }
}