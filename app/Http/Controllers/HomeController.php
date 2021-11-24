<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('bienvenue');
    }

    public function apropos(){
        return view('apropos');
    }

    public function contact(){
        return view('contact');
    }
}
