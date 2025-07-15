<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/index');
    }

    public function about()
    {
        return view('home/about');
    }

    public function services()
    {
        return view('home/services');
    }
}
