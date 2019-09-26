<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = [
            (object) [
                'id' => 1,
                'title' => 'post title 1',
                'detail' => 'post detail 1'
            ],
            (object) [
                'id' => 2,
                'title' => 'post title 2',
                'detail' => 'post detail 2'
            ]
        ];
        $message = "Welcome to " . env('APP_NAME') . "Posts";
        return view('posts.index', [
            'message' => $message,
            'posts' => $posts
        ]);   //โฟลเดอร์posts ไฟล์ index.blade.php
    }

    public function show($id) {
        $post = (object) [
            'id' => $id ,
            'title' => 'Post title' . $id,
            'detail' => 'Post Detail' . $id
        ];
        return view('posts.show',['post'=>$post]);
    }

}
