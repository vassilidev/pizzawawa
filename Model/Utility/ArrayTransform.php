<?php

namespace Utility;

use App\Page;

class ArrayTransform
{
    public static function toWhere($array, $style)
    {
        $return = '';

        if (!empty($array)) {
            foreach ($array as $key)
                $where[] = $key . ' = ?';

            $return = ' WHERE ' . implode(" {$style} ", $where);
        }

        return $return;
    }

}