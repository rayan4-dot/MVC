<?php

namespace App\controllers;

class HomeController {
    public function index() {       
        require_once __DIR__ . '/../views/front/home.php';
    }
}