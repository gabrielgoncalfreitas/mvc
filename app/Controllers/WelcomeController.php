<?php

namespace App\Controllers;

use App\Http\Request\Request;

class WelcomeController
{
    public function index()
    {
        return view('home');
    }

    public function post()
    {
        $request = new Request();
        $all = $request->all();

        var_dump($all->input->);
        // dd($all);
    }
}
