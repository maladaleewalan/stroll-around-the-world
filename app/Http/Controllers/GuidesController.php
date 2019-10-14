<?php

namespace App\Http\Controllers;

use App\Guide;
use Illuminate\Http\Request;

class GuidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guides = Guide::get();
        return view('guides.index',['guides'=>$guides]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guides.create');
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
            'title' => ['required','min:10','max:300'],
            'detail' => ['required','min:10','max:1000'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        
        $guide = new Guide;
        $guide->title = $validateData['title'];
        $guide->detail = $validateData['detail'];
        $guide->type = $request->input('type');
        
        $ext = pathinfo(basename($_FILES['picture']['name']),PATHINFO_EXTENSION);   //ดึงนามสกุลจากไฟล์ที่โหลดมา
        $new_image_name = 'img_'. uniqid() . "." . $ext;    //สุ่มชื่อไฟล์ใหม่ เป็นสตริงไม่ซ้ำ
        $image_path = "image/";      //folder image
        $upload_path = $image_path . $new_image_name;
        //uploading
        $success = move_uploaded_file($_FILES['picture']['tmp_name'],$upload_path);  //เอามาใส่ในupload path
      

        //เพิ่มชื่อรูปภาพใหม่ลงฐานข้อมูล
        $guide->picture = $new_image_name;

        
        $guide->save();

        $guides = Guide::get();
        return redirect()->route('guides.index',['guides'=>$guides]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function show(Guide $guide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function edit(Guide $guide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guide $guide)
    {
        $validateData = $this->validate($request,[
            'title' => ['required','min:10','max:500'],
            'detail' => ['required','min:10','max:3000'],
            'picture' => 'image|mimes:jpeg,png,jpg,gif'
        ]);

        $guide->title = $validateData['title'];
        $guide->detail = $validateData['detail'];
        if($_FILES['picture']['name'] == null) {
            $guide->picture = $guide->picture;
        } else {
            $picture = $guide->picture;
            @unlink('image/'. $picture);   //ลบรูปเก่าออกจาก folder

            $ext = pathinfo(basename($_FILES['picture']['name']),PATHINFO_EXTENSION);   //ดึงนามสกุลจากไฟล์ที่โหลดมา
            $new_image_name = 'img_'. uniqid() . "." . $ext;    //สุ่มชื่อไฟล์ใหม่ เป็นสตริงไม่ซ้ำ
            $image_path = "image/";      //folder image
            $upload_path = $image_path . $new_image_name;
            //uploading
            $success = move_uploaded_file($_FILES['picture']['tmp_name'],$upload_path);  //เอามาใส่ในupload path
      
            //เพิ่มชื่อรูปภาพใหม่ลงฐานข้อมูล
            $guide->picture = $new_image_name;
        }
        
        $guide->save();

        $guides = Guide::get();
        return redirect()->route('guides.index',['guides'=>$guides]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guide $guide)
    {
         //ลบรูปออกจาก folder
         $picture = $guide->picture;
         @unlink('image/'. $picture);
         
         $guide->delete();

         $guides = Guide::get();
        return redirect()->route('guides.index',['guides'=>$guides]);
    }
}
