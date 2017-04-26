<?php

/**
 * Class Router
 */
class Router
{
    protected $routes = [];

    /**
     * @param $file
     * @return static
     */
    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    /**
     * @param $routes
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * @param $uri
     * @return mixed
     * @throws Exception
     */
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined for this URI.');
    }
}