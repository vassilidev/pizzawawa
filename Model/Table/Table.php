<?php

namespace Table;

use App\Page;
use Sql\PDO;
use Utility\ArrayTransform;

class Table
{
    public static $Table;
    public static $Item;

    public static function get($what, $params = [], $style = 'AND')
    {
        $where = ArrayTransform::toWhere(array_keys($params), $style);

        $get = PDO::getPdo()->prepare("SELECT {$what} FROM " . static::$Table . $where);
        $get->execute(array_values($params));
        $data = $get->fetchAll(\PDO::FETCH_ASSOC);
        $get->closeCursor();

        return $data;
    }

    public static function count(array $params = [], $style = 'AND')
    {
        $where = ArrayTransform::toWhere(array_keys($params), $style);

        $count = PDO::getPdo()->prepare('SELECT COUNT(*) nbr FROM ' . static::$Table . $where);
        $count->execute(array_values($params));
        $nbr = $count->fetchColumn();
        $count->closeCursor();

        return $nbr;
    }

    public static function exist()
    {

    }

    public static function create()
    {

    }

    public static function update($what, $where)
    {
        $set = $values = [];

        foreach ($what as $key => $value) {
            $set[] = $key . ' = ?';
            $values[] = $value;
        }
        $set = implode(', ', $set);

        foreach ($where as $key => $value) {
            $wherekeys[] = $key . ' = ?';
            $values[] = $value;
        }

       $where = implode(' AND ', $wherekeys);

       $update = PDO::getPdo()->prepare("UPDATE " . static::$Table . " SET {$set} WHERE {$where}");
       $update->execute($values);
    }

    public static function delete()
    {

    }

}