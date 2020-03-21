<?php

class Router
{
    public $routes = [];

    public function define()
    {
        $this->routes = $routes;

    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        } else {
            throw new Exception();
        }
    }

}
