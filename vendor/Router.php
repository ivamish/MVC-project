<?php

namespace vendor;

use src\Test;

class Router {

    private static array $routes = [];
    private static string $route = '';

    public static function add(string $routeName, array $controller) : void
    {
        self::$routes[$routeName] = $controller;
    }

    public static function getRoutes() : array
    {
        return self::$routes;
    }

    public static function getRoute(string $RouteName)
    {
        return self::$routes[$RouteName] ?? false;
    }
}