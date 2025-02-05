<?php

namespace App\Models;

use App\Config\Database;
use PDO;

class Article {
    private $db;

    public function __construct() {
        $database = new Database();  
        $this->db = $database->connect(); 
    }

    public function getAll() {
        $query = "SELECT * FROM articles ORDER BY created_at DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title, $content) {
        $query = "INSERT INTO articles (title, content) VALUES (:title, :content)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        return $stmt->execute();
    }

    public function getById($id) {
        $query = "SELECT * FROM articles WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}
