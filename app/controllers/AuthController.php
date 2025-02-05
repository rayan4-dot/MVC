<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;
use App\Core\Session;

class AuthController extends Controller {
    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $user = new User();
            $authenticatedUser = $user->login($email, $password);
            
            if ($authenticatedUser) {
                $this->session->set('user', $authenticatedUser);
                header('Location: /');
                exit;
            } else {
                return $this->view('auth/login', ['error' => 'Invalid credentials']);
            }
        }
        return $this->view('auth/login');
    }


    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
    

            $user = new User();
    

            // if ($user->login($email, $password)) {
            //     return $this->view('auth/register', ['error' => 'Email already taken']);
            // }
    

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    

            $user->register([
                'username' => $name,
                'email' => $email,
                'password' => $hashedPassword,
            ]);
    

            // header('Location: /login');
            exit;
        }
    
        return $this->view('auth/register');
    }
    
    public function logout() {
        $this->session->destroy();
        header('Location: /login');
        exit;
    }
}
?>
