<?php


use App\Core\Router;
use App\Controllers\HomeController;


$router = new Router();
$router->get('/', 'HomeController@index');
$router->get('/login', 'AuthController@login');
$router->post('/login', 'AuthController@login');
$router->get('/register', 'AuthController@register');
$router->post('/register', 'AuthController@register');
$router->get('/logout', 'AuthController@logout');

$router->get('/articles', 'ArticleController@index');
$router->get('/articles/create', 'ArticleController@create');
$router->post('/articles/index', 'ArticleController@index');

$router->post('/articles/store', 'ArticleController@store');



$router->dispatch();