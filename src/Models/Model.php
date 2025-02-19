<?php

namespace App\Models;

use PDO;
use App\Config\Database;

abstract class Model
{

    protected PDO $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }
}