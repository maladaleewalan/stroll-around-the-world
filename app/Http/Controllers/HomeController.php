<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Story;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stories = Story::orderBy('created_at','desc')->get();    
        return view('firstpage',['stories' => $stories]);
    }
}
