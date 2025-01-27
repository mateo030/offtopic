<?php

namespace App\Config;

use PDO;

Class DB
{

    public static function connect() 
    {
        $username = 'root';
        $pwd = '';

        $dbh = new PDO('mysql:host=localhost;dbname=off_topic', $username, $pwd);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }
    
}