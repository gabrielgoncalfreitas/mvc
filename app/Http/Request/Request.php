<?php

namespace App\Http\Request;

class Request
{
    private $method;
    private $headers;
    private $all;

    public function __construct()
    {
        $this->method  = $_SERVER['REQUEST_METHOD'];
        $this->headers = getallheaders();
        $this->all     = $_REQUEST;
    }

    public function all()
    {
        $this->all = (object) $this->all;
        return $this->all;
    }

    public static function request($key, $default = null)
    {
        return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
    }
}
