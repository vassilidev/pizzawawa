<?php

namespace Table;

use Item\User;

class Users extends Table
{
    public static $Item = User::class;
    public static $Table = "users";

}