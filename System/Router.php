<?php

namespace System;

class Router
{
    private $routes;
    private $parameters;

    public function __construct()
    {
        $this->routes = array_slice(explode("/", $_SERVER["REQUEST_URI"]), 2);
        $this->parameters = array_slice(explode("/", $_SERVER["REQUEST_URI"]), 4);
    }

    public function run()
    {
        $routes = $this->routes;
        $className = $routes[0];
        if(!empty($routes[0]) and empty($routes[1])){
            die('404 - URL Not Found ! ');
        } else{
            if (empty($routes[0])) {
                require_once("App/Controllers/home.php");
                $classHome = "\App\Controllers\\home";
                $objectHome = new $classHome();
                call_user_func([$objectHome, "index"]);
            } elseif (is_readable(__DIR__."/../App/Controllers/" . $className.'.php')) {
                require_once(__DIR__."/../App/Controllers/" . $className.'.php');
                $parameters = $this->parameters;
                $method = $routes[1];
                $class = "\App\Controllers\\" . $className;
                $object = new $class();
                if (method_exists($object, $method)) {
                    if (!empty($parameters[0])) {
                        call_user_func_array([$object, $method],$parameters);
                    } else {
                        call_user_func([$object, $method]);
                    }
                } else {
                    die("404 - Method Not Found ! ");
                }
            } else {
                die("404 - Class Not Found ! ");
            }
        }
    }
}

