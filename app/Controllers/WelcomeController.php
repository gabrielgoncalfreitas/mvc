<?php

namespace App\Controllers;

use App\Http\Request\Request;

class WelcomeController
{
    public function index()
    {
        return view('home');
    }

    public function post($id)
    {
    }
}
