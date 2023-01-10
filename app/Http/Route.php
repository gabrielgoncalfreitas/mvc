<?php

namespace App\Http;

use App\Http\Request\Request;
class Route
{
    private static $method;
    private static $uri;

    private static function construct()
    {
        self::$method = $_SERVER['REQUEST_METHOD'];
        self::$uri    = $_SERVER['PATH_INFO'] ?? '/';
    }

    public static function checkParams($uri, $method, $args)
    {
        self::construct();

        if (self::$method == $method && self::$uri == $uri && isset($args)) {
            self::executeParams($args);
        } else if (self::$method != $method && self::$uri == $uri && isset($args)) {
            echo 'This route accepts only GET!';
            return;
        }
    }

    public static function executeParams($args)
    {
        if (is_callable($args)) {
            $args();
        } else if (is_array($args)) {

            $className  = $args[0];
            $methodName = $args[1];

            if (class_exists($className)) {

                $class = new $className;
                if (method_exists($class, $methodName)) {
                    $class->$methodName();
                }
            }
        }
    }

    public static function get(string $uri, $args)
    {
        self::checkParams($uri, 'GET', $args);
    }

    public static function post(string $uri, $args)
    {
        self::checkParams($uri, 'POST', $args);
    }
}
