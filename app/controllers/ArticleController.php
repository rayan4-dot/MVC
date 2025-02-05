<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Article;

class ArticleController extends Controller {
    public function index() {
        $article = new Article();
        $articles = $article->getAll();
        return $this->view('articles/index', ['articles' => $articles]);
    }
    
    public function create() {
        return $this->view('articles/create');
    }
    
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            var_dump($title);
             var_dump($content);
            $article = new Article();
            $article->create($title, $content);
            
            header('Location: /articles');
            exit;
        }
    }

}