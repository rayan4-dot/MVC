<?php

namespace App\Core;

class Router {
    private $routes = [];


    public function get($uri, $action) {
        $this->addRoute('GET', $uri, $action);
    }


    public function post($uri, $action) {
        $this->addRoute('POST', $uri, $action);
    }

    private function addRoute($method, $uri, $action) {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'action' => $action
        ];
    }

    public function dispatch() {
        $requestedUri = $_SERVER['REQUEST_URI'];
        $requestedMethod = $_SERVER['REQUEST_METHOD'];
        foreach ($this->routes as $route) {

            if ($route['uri'] === $requestedUri && $route['method'] === $requestedMethod) {
                $this->handleRoute($route['action']);
                return;
            }
        }
        http_response_code(404);
        echo "Page not found";
    }


    private function handleRoute($action) {
        list($controllerName, $methodName) = explode('@', $action);


        $controllerName = 'App\\controllers\\' . $controllerName;
        if (class_exists($controllerName)) {
            $controller = new $controllerName;
        


            if (method_exists($controller, $methodName)) {
                $controller->$methodName();
            } else {
                echo "Method $methodName not found in controller $controllerName";
            }
        } else {
            echo "Controller file $controllerName not found";
        }
    }
}
