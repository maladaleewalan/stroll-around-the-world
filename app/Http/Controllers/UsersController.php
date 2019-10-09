<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();    
        return view('users.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => ['required','min:5','max:20'],
            'password' => ['required','min:5','max:10'],
            'firstname' => ['required','min:5','max:20'],
            'lastname' => ['required','min:5','max:20'],
            'email' => ['required','min:10','max:30']
        ]);
        $user = new User;
        $user->username = $validateData['username'];
        $user->password = $validateData['password'];
        $user->firstname = $validateData['firstname'];
        $user->lastname = $validateData['lastname'];
        $user->email = $validateData['email'];
        $user->save();

        return redirect()->route('users.show',['user'=>$user->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)         // URL: 127.0.0.1:8000/users/{id}
    {
        return view('users.show',['user' => $user]);   //$user คือ parameter ที่ส่งมา
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            'username' => ['required','min:5','max:20'],
            // 'password' => ['required','min:5','max:10'],
            'firstname' => ['required','min:5','max:20'],
            'lastname' => ['required','min:5','max:20'],
            'email' => ['required','min:10','max:30']
        ]);
        $user->username = $validateData['username'];
        // $user->password = $validateData['password'];
        $user->firstname = $validateData['firstname'];
        $user->lastname = $validateData['lastname'];
        $user->email = $validateData['email'];
        $user->save();

        return redirect()->route('users.show',['user'=>$user->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
