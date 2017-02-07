<?php

class Router
{

    protected $routes = [];

    /**
     * Getting all the routes that defined and updating the routes property
     * @param $routes
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }


    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }


    public function direct($uri)
    {
        if(array_key_exists($uri, $this->routes))
        {
            return $this->routes[$uri];
        }

        throw new Exception('No Routes Defined');
    }

}