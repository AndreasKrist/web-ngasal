<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function panti()
    {
        return view('panti');
    }

    public function about()
    {
        return view('about');
    }
}