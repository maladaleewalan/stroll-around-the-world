<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

use App\Country; 
use App\Notification;

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
        $stories = Story::where('status','pass')->orderBy('created_at','desc')->get();    //เรียงจากวันที่โพสล่าสุดขึ้นก่อน (desc มากไปน้อย วันที่มากขึ้นก่อน)
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
        if(Auth::user()->role == 'user2' || Auth::user()->role == 'admin') {
            $story->status = 'pass';
            Auth::user()->point = Auth::user()->point + 3;
            Auth::user()->totalpost++;
        }
        $story->save();

        if($story->user_id != "Admin") {
            if(Auth::user()->point >= 10) {
                Auth::user()->role = "user2";
            }
        }
        Auth::user()->save();

        return redirect()->route('stories.show',['story'=>$story->id]); 
    }

    public function Newspass($id) {
        $story = Story::find($id);
        $story->status = "pass";
        $story->save();

        $story->user->point = $story->user->point + 3;
        $story->user->totalpost++;
        if($story->user->role != "Admin") {
            if($story->user->point >= 10) {
                $story->user->role = "user2";
            }
        }
        $story->user->save();

        $notification = new Notification;
        $notification->detail = "ข่าว " . $story->title . "ได้รับการอนุมัติจากผู้ดูแลระบบแล้ว";
        $notification->user_id = $story->user_id;
        $notification->save();

        return redirect()->route('checkNews');
    }

    public function Newsnotpass($id) {
        $story = Story::find($id);
        //ลบรูปออกจาก folder
        $picture = $story->picture;
        @unlink('image/'. $picture);

    
        $story->delete();

        $notification = new Notification;
        $notification->detail = "ข่าว " . $story->title . "ไม่!ได้รับการอนุมัติจากผู้ดูแลระบบ!!!";
        $notification->user_id = $story->user_id;
        $notification->save();
        return redirect()->route('checkNews');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)     // URL: 127.0.0.1:8000/stories/{id}
    {
        if($story->status == "notpass" && Auth::id() !== $story->user->id) {   //ถ้าstatus ยังไม่ผ่าน จะมีแค่คนโพสกับ admin ที่เข้าไปดูdetailข่าวได้
            return redirect()->route('stories.index');
        }
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
        if(Auth::id() !== $story->user->id) {
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

        Auth::user()->totalpost--;
        Auth::user()->save();
        
        $stories = Story::orderBy('created_at','desc')->get();    //เรียงจากวันที่โพสล่าสุดขึ้นก่อน (desc มากไปน้อย วันที่มากขึ้นก่อน)
        return redirect()->route('stories.index',['stories'=>$stories]);
    
    }

    
}
