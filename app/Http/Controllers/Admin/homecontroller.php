<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // change 'home' to any view you have, e.g. 'welcome'
    }
}
