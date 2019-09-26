<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index');
    }

    public function guide() {
        return view('home.guide');
    }

    public function gallery(){
        return view('home.gallery');
    }
}
