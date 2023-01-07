<?php

namespace App\Http;

class Route
{
    private static $method;
    private static $uri;

    private static function construct()
    {
        self::$method = $_SERVER['REQUEST_METHOD'];
        self::$uri    = $_SERVER['REQUEST_URI'];
    }

    public static function get(string $uri, $params)
    {
        self::construct();

        if (self::$method == 'GET' && self::$uri == $uri && isset($params)) {
            if (is_callable($params)) {
                $params();
            } else if (is_array($params)) {
                (new $params[0])->{$params[1]}(isset($params) ? $params : null);
            }
        }

        return;
    }
}
