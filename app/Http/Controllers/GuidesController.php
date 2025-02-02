<?php

namespace App\Http\Controllers;

use App\Guide;
use Illuminate\Http\Request;

use Auth;

use App\Country;
use App\Region;

class GuidesController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index','show','indexGuidesCountryRegion','indexGuidesCountry']);  //ต้อง login แล้ว ถึงจะเข้าทุกหน้าได้ ยกเว้นหน้า index show
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $guides = Guide::get();
        // return view('guides.index',['guides'=>$guides]);
    }
       

    public function indexGuidesCountry($id)
    {
        $country = Country::find($id);
        $regions = Region::where('country_id',$id)->orderBy('created_at','desc')->get();
        $guides = Guide::get();
        return view('guides.index',['guides'=>$guides, 'regions'=>$regions, 'country'=>$country]);
    }

    public function indexGuidesCountryRegion($id,$regionid)
    {
        $country = Country::find($id);
        $regions = Region::where('country_id',$id)->orderBy('created_at','desc')->get();
        $guides = Guide::where('region_id',$regionid)->get();
        return view('guides.indexGuidesCountryRegion',['guides'=>$guides, 'regions'=>$regions, 'country'=>$country]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('guides.create');
    }

    public function createGuidesEachCountry($id) {
        $country = Country::find($id);

        $regions = Region::where('country_id',$id)->get();
        return view('guides.create',['regions'=>$regions, 'country'=>$country]);
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
            'title' => ['required','min:5','max:50'],
            'detail' => ['required','min:10','max:350'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        
        $guide = new Guide;
        $guide->title = $validateData['title'];
        $guide->detail = $validateData['detail'];
        $guide->type = $request->input('type');
        $guide->region_id = $request->input('region');
        
        $ext = pathinfo(basename($_FILES['picture']['name']),PATHINFO_EXTENSION);   //ดึงนามสกุลจากไฟล์ที่โหลดมา
        $new_image_name = 'img_'. uniqid() . "." . $ext;    //สุ่มชื่อไฟล์ใหม่ เป็นสตริงไม่ซ้ำ
        $image_path = "image/";      //folder image
        $upload_path = $image_path . $new_image_name;
        //uploading
        $success = move_uploaded_file($_FILES['picture']['tmp_name'],$upload_path);  //เอามาใส่ในupload path
      

        //เพิ่มชื่อรูปภาพใหม่ลงฐานข้อมูล
        $guide->picture = $new_image_name;
        
        $id = $guide->region->country_id;
        $regionid = $guide->region_id;
        $guide->save();

        $country = Country::find($id);
        $regions = Region::where('country_id',$id)->orderBy('created_at','desc')->get();
        $guides = Guide::where('region_id',$regionid)->get();
        return view('guides.indexGuidesCountryRegion',['guides'=>$guides, 'regions'=>$regions, 'country'=>$country]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function show(Guide $guide)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function edit(Guide $guide)
    {
        if(Auth::user()->role !== 'admin') {   //ถ้าไม่ใช่แอดมิน
            $id = $guide->region->country_id;
            $regionid = $guide->region_id;
            $country = Country::find($id);
            $regions = Region::where('country_id',$id)->orderBy('created_at','desc')->get();
            $guides = Guide::where('region_id',$regionid)->get();
            return view('guides.indexGuidesCountryRegion',['guides'=>$guides, 'regions'=>$regions, 'country'=>$country]);
        }
        return view('guides.edit',['guide'=>$guide]);

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
            'title' => ['required','min:5','max:50'],
            'detail' => ['required','min:10','max:350'],
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

        $id = $guide->region->country_id;
        $regionid = $guide->region_id;
        $country = Country::find($id);
        $regions = Region::where('country_id',$id)->orderBy('created_at','desc')->get();
        $guides = Guide::where('region_id',$regionid)->get();
        return view('guides.indexGuidesCountryRegion',['guides'=>$guides, 'regions'=>$regions, 'country'=>$country]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guide $guide)
    {
        $id = $guide->region->country_id;
        $regionid = $guide->region_id;

        //ลบรูปออกจาก folder
         $picture = $guide->picture;
         @unlink('image/'. $picture);
         
         $guide->delete();

         $country = Country::find($id);
         $regions = Region::where('country_id',$id)->orderBy('created_at','desc')->get();
         $guides = Guide::where('region_id',$regionid)->get();
        return view('guides.indexGuidesCountryRegion',['guides'=>$guides, 'regions'=>$regions, 'country'=>$country]);
    }
}
