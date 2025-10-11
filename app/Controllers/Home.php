<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function services()
    {
        return view('pages/services');
    }

    public function portfolio()
    {
        return view('pages/portfolio');
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
