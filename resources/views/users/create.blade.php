@extends('layouts.home')

@section('content')
<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2">SIGN UP</span>&nbsp;<i class="fas fa-user-plus iconsignup"></i><br>
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

    <form action="{{route('users.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <div class="formsignup" style="padding-left:250px">
            <div class="form-group">
                <label>Username</label>
                <input style="width:500px;height:50px;font-size:20px" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Enter username" name="username" value="{{old('username')}}">
                @error('username')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label >Password</label>
                <input style="width:500px;height:50px;font-size:20px" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" value="{{old('password')}}">
                @error('password')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label >Firstname</label>
                <input style="width:500px;height:50px;font-size:20px" type="text" class="form-control @error('firstname') is-invalid @enderror" placeholder="Enter Firstname" name="firstname" value="{{old('firstname')}}">
                @error('firstname')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label >Lastname</label>
                <input style="width:500px;height:50px;font-size:20px" type="text" class="form-control @error('lastname') is-invalid @enderror" placeholder="Enter Lastname" name="lastname" value="{{old('lastname')}}">
                @error('lastname')
                <div class="alertinputfalse">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label >Email</label>
                <input style="width:500px;height:50px;font-size:20px" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" name="email" value="{{old('email')}}">
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
                    <img src=""width="400px" height="400px"/>
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