@extends('layouts.home')

@section('content')
<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2">edit Profile</span>&nbsp;<i class="fas fa-user-edit iconsignup"></i><br>
    </div>
</div>

    <!-- @if($errors->any()) 
        <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
    @endif
     -->

    <form action="{{route('users.update', ['user'=> $user->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <div class="formsignup"  style="padding-top:90px;width:700px;">
            <div class="form-group"  style="margin-left:150px">
                <label >Name</label>
                <input style="width:500px;height:50px;font-size:20px" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name',$user->name)}}">
                @error('name')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group"  style="margin-left:150px">
                <label >Email</label>
                <input style="width:500px;height:50px;font-size:20px" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email',$user->email)}}">
                @error('email')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group" style="margin-left:100px">
                <p style="padding-left:30%;text-shadow:3px 3px white">Profile picture</p>
                <input type="file" name="picture" class="form-control-file" style="font-size:20px;margin-left:100px">
                @error('picture')
                <div class="red">{{$message}}</div>
                @enderror
            </div>
        </div>
    </div>
    
    <div class="col">
        @csrf
        @method('PUT')
        <div class="formsignup" style="">
            <br>
            <div class="form-group">
                <p style="padding-left:20%;text-shadow:3px 3px white">Change password</p>
            </div>
             <div class="form-group"  style="margin-left:30px"> 
                <label >New password</label>
                <input style="width:500px;height:50px;font-size:20px" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}">
                @error('password')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group"  style="margin-left:30px">
                <label >Confirm password</label>
                <input style="width:500px;height:50px;font-size:20px" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
           
           
        </div>
             
    </div>
    </div>


    <div class="floatright" style="margin-right:15%">
        <a class="btn btn-danger buttonsignup" style="margin-left:190px" href="{{route('users.show',['user'=>$user->id])}}">Cancel</a>

        <button class="btn btn-success buttonsignup" type="submit">Save Change</button>
    </div>
    </form> 
</div>





@endsection 