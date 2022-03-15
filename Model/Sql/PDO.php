<?php

namespace Sql;

class PDO
{
    private static $instance;

    private static $_user = 'root';
    private static $_password = '';
    private static $_dbName = '';
    private static $_host = 'localhost';

    public static function setter(array $array)
    {
        foreach ($array as $fonction => $value) {
            $f = 'set' . ucfirst($fonction);
            self::$f($value);
        }
    }

    /*
     * Return PDO
     */
    public static function getPdo()
    {
        if (is_null(self::$instance)) {
            self::$instance = new \PDO('mysql:host=' . self::getHost() . ';charset=utf8mb4;dbname=' . self::getDbName() . '', self::getUser(), self::getPassword());
            if (ENV == 'DEV'){
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
            }
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public static function getHost()
    {
        return self::$_host;
    }

    /**
     * @param mixed $host
     */
    public static function setHost($host)
    {
        self::$_host = $host;
    }

    /**
     * @return mixed
     */
    public static function getDbName()
    {
        return self::$_dbName;
    }

    /**
     * @param mixed $dbName
     */
    public static function setDbName($dbName)
    {
        self::$_dbName = $dbName;
    }

    /**
     * @return mixed
     */
    public static function getUser()
    {
        return self::$_user;
    }

    /**
     * @param mixed $user
     */
    public static function setUser($user)
    {
        self::$_user = $user;
    }

    /**
     * @return mixed
     */
    public static function getPassword()
    {
        return self::$_password;
    }

    /**
     * @param mixed $password
     */
    public static function setPassword($password)
    {
        self::$_password = $password;
    }
}