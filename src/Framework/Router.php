<?php
namespace App\Framework;

class Router {

    private $routes = [];

    private function registerRoute($method, $uri, $action, $query = null)
    {
        list($controller, $controllerMethod) = explode('@', $action);
        array_push($this->routes,['uri' => $uri, 'method' => $method, 'controller' => $controller, 'controllerMethod' => $controllerMethod, 'queryString' => $query]);
    }

    public function get($uri, $controllerMethod, $query = null)
    {
        $this->registerRoute('GET', $uri, $controllerMethod, $query);
        var_dump_pre($this->routes);
        die();
    }

    public function post($uri, $controllerMethod)
    {
        $this->registerRoute('POST', $uri, $controllerMethod);
    }

    public function route($uri) 
    {
        $method = $_SERVER['REQUEST_METHOD'];

        foreach($this->routes as $route) {
            if ($route['uri'] == $uri && $method == $route['method']) {

                $controller = 'App\\Controllers\\' . $route['controller'];
                $controllerMethod = $route['controllerMethod'];

                $controllerInstance = new $controller();
                $controllerInstance->$controllerMethod();
                return;
            }
        } 
    }
}