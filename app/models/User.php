<?php

namespace App\Models;

use App\Core\Model;
use PDO;
use PDOException;

class User extends Model {


    public function login($email, $password) {
        try {
            $stmt = $this->db->prepare('SELECT * FROM users WHERE email = :email');
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user && password_verify($password, $user['password'])) {
                return $user;
            }
            return false;
        } catch (PDOException $e) {
            echo 'PDO Error: ' . $e->getMessage();
            die;
            return false;
        }
    }
    

    public function register($data) {
        
        try {
            $stmt = $this->db->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
            $stmt->bindValue(':username', $data['username']);
            $stmt->bindValue(':email', $data['email']);
            $stmt->bindValue(':password', $data['password']);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'PDO Error: ' . $e->getMessage();
            return false;
        }   
    }
}
