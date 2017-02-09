<?php

namespace App\Core;

class Router
{

    protected $routes = [
        'GET'   =>  [],
        'POST'  =>  []
    ];

    /**
     * Getting all the routes that defined and updating the routes property
     * @param $routes
     */

    /**
     * For Get requests
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * For Post requests
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }


    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }


    public function direct($uri, $requestType)
    {
        if(array_key_exists($uri, $this->routes[$requestType]))
        {
            //die($this->routes[$requestType][$uri]);
            //explode('@', $this->routes[$requestType][$uri]);
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception('No Routes Defined');
    }


    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        //check if the method exists or not
        if(!method_exists($controller, $action))
        {
            throw new Exception("No {$action} method exists in {$controller}");
        }
        return $controller->$action();
    }



}