<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index','show']);  //ต้อง login แล้ว ถึงจะเข้าทุกหน้าได้ ยกเว้นหน้า index show
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();  //เรียงจากวันที่โพสล่าสุดขึ้นก่อน (desc มากไปน้อย วันที่มากขึ้นก่อน)
        return view('posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $this->validate($request,[
            'detail' => ['required','min:10','max:300'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        
        $post = new Post;
        $post->detail = $validateData['detail'];

        $ext = pathinfo(basename($_FILES['picture']['name']),PATHINFO_EXTENSION);   //ดึงนามสกุลจากไฟล์ที่โหลดมา
        $new_image_name = 'img_'. uniqid() . "." . $ext;    //สุ่มชื่อไฟล์ใหม่ เป็นสตริงไม่ซ้ำ
        $image_path = "image/";      //folder image
        $upload_path = $image_path . $new_image_name;
        //uploading
        $success = move_uploaded_file($_FILES['picture']['tmp_name'],$upload_path);  //เอามาใส่ในupload path
      

        //เพิ่มชื่อรูปภาพใหม่ลงฐานข้อมูล
        $post->picture = $new_image_name;
        
        $post->save();

        return redirect()->route('posts.show',['post'=>$post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)  // URL: 127.0.0.1:8000/posts/{id}
    {
        return view('posts.show',['post'=> $post]);   //$post คือ parameter ที่ส่งมา
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if(Auth::id() !== $post->user->id) {
            return redirect()->route('posts.show',['post'=>$post->id]);
        }
        return view('posts.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validateData = $this->validate($request,[
            'detail' => ['required','min:10','max:300'],
            'picture' => 'image|mimes:jpeg,png,jpg,gif'
        ]);

        $post->detail = $validateData['detail'];
        if($_FILES['picture']['name'] == null) {
            $post->picture = $post->picture;
        } else {
            $picture = $post->picture;
            @unlink('image/'. $picture);   //ลบรูปเก่าออกจาก folder

            $ext = pathinfo(basename($_FILES['picture']['name']),PATHINFO_EXTENSION);   //ดึงนามสกุลจากไฟล์ที่โหลดมา
            $new_image_name = 'img_'. uniqid() . "." . $ext;    //สุ่มชื่อไฟล์ใหม่ เป็นสตริงไม่ซ้ำ
            $image_path = "image/";      //folder image
            $upload_path = $image_path . $new_image_name;
            //uploading
            $success = move_uploaded_file($_FILES['picture']['tmp_name'],$upload_path);  //เอามาใส่ในupload path
      
            //เพิ่มชื่อรูปภาพใหม่ลงฐานข้อมูล
            $post->picture = $new_image_name;
        }
        
        $post->save();

        return redirect()->route('posts.show',['post'=>$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //ลบรูปออกจาก folder
        $picture = $post->picture;
        @unlink('image/'. $picture);
        
        $post->delete();

        $posts = Post::orderBy('created_at','desc')->get();    //เรียงจากวันที่โพสล่าสุดขึ้นก่อน (desc มากไปน้อย วันที่มากขึ้นก่อน)
        return redirect()->route('posts.index',['posts'=>$posts]);
    }
}
