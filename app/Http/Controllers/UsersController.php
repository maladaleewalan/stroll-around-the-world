<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

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
        $validateData = $this->validate($request,[
            'username' => ['required','min:5','max:20'],
            'password' => ['required','min:5','max:10'],
            'firstname' => ['required','min:5','max:20'],
            'lastname' => ['required','min:5','max:20'],
            'email' => ['required','min:10','max:30'],
            'picture' => 'image|mimes:jpeg,png,jpg,gif'
        ]);
        
        $user = new User;
        $user->username = $validateData['username'];
        $user->password = Hash::make($validateData['password']);
        $user->firstname = $validateData['firstname'];
        $user->lastname = $validateData['lastname'];
        $user->email = $validateData['email'];

        //รูป
        $ext = pathinfo(basename($_FILES['picture']['name']),PATHINFO_EXTENSION);   //ดึงนามสกุลจากไฟล์ที่โหลดมา
        $new_image_name = 'img_'. uniqid() . "." . $ext;    //สุ่มชื่อไฟล์ใหม่ เป็นสตริงไม่ซ้ำ
        $image_path = "image/";      //folder image
        $upload_path = $image_path . $new_image_name;
        //uploading
        $success = move_uploaded_file($_FILES['picture']['tmp_name'],$upload_path);  //เอามาใส่ในupload path
      

        //เพิ่มชื่อรูปภาพใหม่ลงฐานข้อมูล
        if($_FILES['picture']['name'] != null) {   
            $user->picture = $new_image_name;
        }
        else {
            $user->picture = "no_avatar.jpg";  //ถ้าไม่ได้อัพรูป ให้เป็นรูปเริ่มต้น
        }
        

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
        $validateData = $this->validate($request,[
            'username' => ['required','min:5','max:20'],
            'firstname' => ['required','min:5','max:20'],
            'lastname' => ['required','min:5','max:20'],
            'email' => ['required','min:10','max:30'],
            'password' => ['max:10'],
            'password_confirmation' => ['max:10'],
            'picture' => 'image|mimes:jpeg,png,jpg,gif'
        ]);


        if($_FILES['picture']['name'] == null) {
            $user->picture = $user->picture;
        } else {
            $picture = $user->picture;
            @unlink('image/'. $picture);   //ลบรูปเก่าออกจาก folder

            $ext = pathinfo(basename($_FILES['picture']['name']),PATHINFO_EXTENSION);   //ดึงนามสกุลจากไฟล์ที่โหลดมา
            $new_image_name = 'img_'. uniqid() . "." . $ext;    //สุ่มชื่อไฟล์ใหม่ เป็นสตริงไม่ซ้ำ
            $image_path = "image/";      //folder image
            $upload_path = $image_path . $new_image_name;
            //uploading
            $success = move_uploaded_file($_FILES['picture']['tmp_name'],$upload_path);  //เอามาใส่ในupload path
      
            //เพิ่มชื่อรูปภาพใหม่ลงฐานข้อมูล
            $user->picture = $new_image_name;
        }
        
        $user->save();

        if($validateData['password'] == null && $validateData['password_confirmation'] == null) {
            //input password , confirm ว่าง = ไม่ได้เปลี่ยนรหัส
            $user->username = $validateData['username'];
            $user->firstname = $validateData['firstname'];
            $user->lastname = $validateData['lastname'];
            $user->email = $validateData['email'];

            $user->password = Hash::make($validateData['password']);
            
            $user->save();
            return redirect()->route('users.show',['user'=>$user->id]);

        }
        else if($validateData['password'] != null && $validateData['password_confirmation'] != null
            && ($validateData['password'] === $validateData['password_confirmation'])) {
            //input password , confirm ตรงกัน เปลี่ยนรหัสผ่านได้
            $validateData = $request->validate([
                'password' => ['required','min:5','max:10'],
                'password_confirmation' => ['required','min:5','max:10']
            ]);

            $user->password = Hash::make($validateData['password']);
            $user->save();
            return redirect()->route('users.show',['user'=>$user->id]);

        }
        else if($validateData['password'] != null && $validateData['password_confirmation'] != null
            && ($validateData['password'] != $validateData['password_confirmation'])) {
            //input password , confirm ไม่ตรงกัน
            $this->validate(request(), [
                'password' => 'required|confirmed'
            ]);
        }
        else if($request->input('password') != null && $request->input('password_confirmation') == null
        || ($request->input('password') == null && $request->input('password_confirmation') != null)) {
            //ถ้าไม่ใส่ password , confirm ช่องใดช่องหนึ่ง
            $validateData = $request->validate([
                'password' => ['required','min:5','max:10'],
                'password_confirmation' => ['required','min:5','max:10']
            ]);
        }
        
        

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
