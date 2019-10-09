@extends('layouts.home')

@section('content')
<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2">edit Profile</span>&nbsp;<i class="fas fa-user-plus iconsignup"></i><br>
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
            <!-- <div class="form-group">
                <label >Password</label>
                <input style="width:500px;height:50px;font-size:20px" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password',$user->password)}}">
                @error('password')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror

            </div> -->
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
        <div class="formsignup">
            <!-- <form> -->
                <div class="form-group" style="font-size:20px">
                    <label>Choose Profile picture</label>
                    <input type="file" class="form-control-file" >
                    <br>
                    <img src="" width="400px" height="400px"/>
                </div>
            <!-- </form> -->
        </div>        
    </div>
</div>
<div class="center">
        <button class="btn btn-success buttonsignup" type="submit">Submit</button>
</div>

</form>


@endsection