<?php

namespace App\Controllers;

use App\Utils\Views\Views;

class WelcomeController
{
    public function index()
    {
        return Views::view('home', 'asdasd');
    }
}
