<?php

namespace App;

class Application
{
    private $routes;

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function run()
    {
        $uri = $_SERVER["REQUEST_URI"];
        foreach ($this->routes as $item) {
            [$route, $handler] = $item;
            $prepareRoute = preg_quote($route, '/');
            if (preg_match("/^$prepareRoute$/i", $uri)) {
                echo $handler();
                return;
            }
        }
    }
}