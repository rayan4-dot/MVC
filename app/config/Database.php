<?php

namespace App\Config;

use PDO;
use PDOException;

class Database {
    private $host = 'localhost';       
    private $db_name = 'rayan';   
    private $username = 'rayan';        
    private $password = '';             
    private $connection;

    public function __construct() {
        $this->connection = null;
    }

    public function connect() {
        if ($this->connection === null) {
            $dsn = "pgsql:host=" . $this->host . ";dbname=" . $this->db_name;
            try {
                $this->connection = new PDO($dsn, $this->username, $this->password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                die("Connection error: " . $exception->getMessage());
            }
        }
        return $this->connection;
    }
}
