<?php

namespace App\Http\Controllers;

use App\Http\MyClasses\ipClient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function catar()
    {
        return view ('catar.index');
    }

    public function ip()
    {
        return view ('ip.index');
    }
}
