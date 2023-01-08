<?php

namespace App\Http\Request;

class Request
{
    private $method;
    private $headers;
    private $all;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->headers = getallheaders();
        $this->all = array_merge($_GET, $_POST);
    }

    public function all()
    {
        $this->all = (object) $this->all;
        return $this->all;
    }
}
