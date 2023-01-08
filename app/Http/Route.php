<?php

namespace App\Http;

class Route
{
    private static $method;
    private static $uri;

    private static function construct()
    {
        self::$method = $_SERVER['REQUEST_METHOD'];
        self::$uri    = $_SERVER['PATH_INFO'] ?? '/';
    }

    public static function checkParams($uri, $method, $params)
    {
        self::construct();

        if (self::$method == $method && self::$uri == $uri && isset($params)) {
            self::executeParams($params);
        } else if (self::$method != $method && self::$uri == $uri && isset($params)) {
            echo 'This route accepts only GET!';
            return;
        }
    }

    public static function executeParams($params)
    {
        if (is_callable($params)) {
            $params();
        } else if (is_array($params)) {
            (new $params[0])->{$params[1]}(isset($params) ? $params : null);
        }
    }

    public static function get(string $uri, $params)
    {
        self::checkParams($uri, 'GET', $params);
    }

    public static function post(string $uri, $params)
    {
        self::checkParams($uri, 'POST', $params);
    }
}
