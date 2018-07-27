<?php
namespace App\Core;


class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($route, $controller)
    {
        $this->routes['GET'][$route] = $controller;
    }

    public function post($route, $controller)
    {
        $this->routes['POST'][$route] = $controller;
    }

    public function direct($uri, $requestMethod) {

        if(array_key_exists($uri, $this->routes[$requestMethod])) {

            $this->callAction(...explode('@', $this->routes[$requestMethod][$uri]));


            //require $this->routes[$requestMethod][$uri];
        } else {
            require "views/404.view.php";
        }

    }

    public function callAction($controller, $method) {
        $c = "\\App\\Controllers\\{$controller}";
        $c = new $c;

        if(!method_exists($c, $method)) {
            throw new \Exception('No method');
        }
        return $c->$method();
    }
}