<?php

namespace App\Http\Controllers;
use App\Story;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index');
    }

    public function first() {
        $stories = Story::orderBy('created_at','desc')->get();    
        return view('home.first',['stories'=>$stories]);
    }

    public function signup() {
        return view('home.signup');
    }

}
