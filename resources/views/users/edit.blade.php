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

    <form action="{{route('users.update', ['user'=> $user->id])}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <div class="formsignup"  style="padding-left:250px">
            <div class="form-group">
            <br>
                <label>Username</label>
                <input style="width:500px;height:50px;font-size:20px" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{old('username',$user->username)}}">
                @error('username')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label >Firstname</label>
                <input style="width:500px;height:50px;font-size:20px" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{old('firstname',$user->firstname)}}">
                @error('firstname')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label >Lastname</label>
                <input style="width:500px;height:50px;font-size:20px" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{old('lastname',$user->lastname)}}">
                @error('lastname')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label >Email</label>
                <input style="width:500px;height:50px;font-size:20px" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email',$user->email)}}">
                @error('email')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
           
        
        </div>
    </div>
    
    <div class="col">
        @csrf
        @method('PUT')
        <div class="formsignup">
            <br>
            <div class="form-group">
                <p style="padding-left:18%;text-shadow:3px 3px white">Change password</p>
            </div>
             <div class="form-group">
                <label >New password</label>
                <input style="width:500px;height:50px;font-size:20px" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}">
                @error('password')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label >Confirm password</label>
                <input style="width:500px;height:50px;font-size:20px" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
           
        </div>
             
    </div>
    </div>
    <div class="center">
                <button class="btn btn-success buttonsignup" type="submit">Save Change</button>
    </div>
    </form> 
</div>





@endsection