<?php
require_once 'Database.php';

use App\Config\Database;
$database = new Database();


$connection = $database->connect();


if ($connection) {
    echo "Successfully connected to the database!";
} else {
    echo "Failed to connect to the database.";
}
