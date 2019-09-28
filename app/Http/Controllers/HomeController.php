<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index');
    }

    public function first() {
        return view('home.first');
    }

    public function signup() {
        return view('home.signup');
    }
}
