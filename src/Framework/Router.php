<?php
namespace App\Framework;

class Router {

    private $routes = [];

    private function registerRoute($method, $uri, $action)
    {
        list($controller, $controllerMethod) = explode('@', $action);
        array_push($this->routes, ['uri' => $uri, 'method' => $method, 'controller' => $controller, 'controllerMethod' => $controllerMethod]);
    }

    public function get($uri, $controllerMethod)
    {
        $this->registerRoute('GET', $uri, $controllerMethod);
    }

    public function post($uri, $controllerMethod)
    {
        $this->registerRoute('POST', $uri, $controllerMethod);
    }

    public function route($uri) 
    {
        $method = $_SERVER['REQUEST_METHOD'];

        $url = $uri;

        if(str_contains($uri, '?')) {
            list($link, $param) = explode('?', $uri);
            $url = $link;
        }

        foreach($this->routes as $route) {
            if ($route['uri'] == $url && $method == $route['method']) {

                $controller = 'App\\Controllers\\' . $route['controller'];
                $controllerMethod = $route['controllerMethod'];

                $controllerInstance = new $controller();
                $controllerInstance->$controllerMethod();
                return;
            }
        } 
    }
}