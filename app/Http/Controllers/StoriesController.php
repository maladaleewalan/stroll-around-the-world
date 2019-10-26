<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

use App\Country; 

use Auth;
class StoriesController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index','show','indexStoriesCountry']);  //ต้อง login แล้ว ถึงจะเข้าทุกหน้าได้ ยกเว้นหน้า index show
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::orderBy('created_at','desc')->get();    //เรียงจากวันที่โพสล่าสุดขึ้นก่อน (desc มากไปน้อย วันที่มากขึ้นก่อน)
        $countries = Country::get();
        return view('stories.index',['stories'=>$stories , 'countries'=>$countries]);
    }


    public function indexStoriesCountry($id) {
        $stories = Story::where('country_id',$id)->orderBy('created_at','desc')->get();
        $countries = Country::get();
        return view('stories.indexStoriesCountry',['stories'=>$stories , 'countries'=>$countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        return view('stories.create',['countries'=>$countries]);
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
            'title' => ['required','min:10','max:500'],
            'detail' => ['required','min:10','max:3000'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        
        $story = new Story;
        $story->title = $validateData['title'];
        $story->detail = $validateData['detail'];
        $story->country_id = $request->input('country');
        
        $ext = pathinfo(basename($_FILES['picture']['name']),PATHINFO_EXTENSION);   //ดึงนามสกุลจากไฟล์ที่โหลดมา
        $new_image_name = 'img_'. uniqid() . "." . $ext;    //สุ่มชื่อไฟล์ใหม่ เป็นสตริงไม่ซ้ำ
        $image_path = "image/";      //folder image
        $upload_path = $image_path . $new_image_name;
        //uploading
        $success = move_uploaded_file($_FILES['picture']['tmp_name'],$upload_path);  //เอามาใส่ในupload path
      

        //เพิ่มชื่อรูปภาพใหม่ลงฐานข้อมูล
        $story->picture = $new_image_name;
        $story->user_id = Auth::user()->id;
        Auth::user()->point = Auth::user()->point + 3;
        $story->save();
        if(Auth::user()->role != "Admin") {
            if(Auth::user()->point >= 10) {
                Auth::user()->role = "user2";
            }
            if(Auth::user()->point >= 20) {
                Auth::user()->role = "user3";
            }
        }
        Auth::user()->save();

        return redirect()->route('stories.show',['story'=>$story->id]);
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)     // URL: 127.0.0.1:8000/stories/{id}
    {
        return view('stories.show',['story' => $story]);   //$story คือ parameter ที่ส่งมา
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        if(Auth::id() !== $story->user->id && Auth::user()->role !== 'admin') {
            return redirect()->route('stories.show',['story'=>$story]);
        }
        return view('stories.edit',['story' => $story]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
        $validateData = $this->validate($request,[
            'title' => ['required','min:10','max:500'],
            'detail' => ['required','min:10','max:3000'],
            'picture' => 'image|mimes:jpeg,png,jpg,gif'
        ]);

        $story->title = $validateData['title'];
        $story->detail = $validateData['detail'];
        if($_FILES['picture']['name'] == null) {
            $story->picture = $story->picture;
        } else {
            $picture = $story->picture;
            @unlink('image/'. $picture);   //ลบรูปเก่าออกจาก folder

            $ext = pathinfo(basename($_FILES['picture']['name']),PATHINFO_EXTENSION);   //ดึงนามสกุลจากไฟล์ที่โหลดมา
            $new_image_name = 'img_'. uniqid() . "." . $ext;    //สุ่มชื่อไฟล์ใหม่ เป็นสตริงไม่ซ้ำ
            $image_path = "image/";      //folder image
            $upload_path = $image_path . $new_image_name;
            //uploading
            $success = move_uploaded_file($_FILES['picture']['tmp_name'],$upload_path);  //เอามาใส่ในupload path
      
            //เพิ่มชื่อรูปภาพใหม่ลงฐานข้อมูล
            $story->picture = $new_image_name;
        }
        
        $story->save();

        return redirect()->route('stories.show',['story'=>$story->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {
        //ลบรูปออกจาก folder
        $picture = $story->picture;
        @unlink('image/'. $picture);
        
        $story->delete();

        $stories = Story::orderBy('created_at','desc')->get();    //เรียงจากวันที่โพสล่าสุดขึ้นก่อน (desc มากไปน้อย วันที่มากขึ้นก่อน)
        return redirect()->route('stories.index',['stories'=>$stories]);
    
    }

    
}
