<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowsController extends Controller
{
    public function guide() {
        return view('shows.guide');
    }

    public function gallery(){
        return view('shows.gallery');
    }

    public function news(){
        return view('shows.news');
    }
}
