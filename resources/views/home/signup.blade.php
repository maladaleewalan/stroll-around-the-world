@extends('layouts.home')

@section('content')
<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2">SIGN UP</span>&nbsp;<i class="fas fa-user-plus iconsignup"></i><br>
    </div>
</div>

<div class="">
  <div class="row">
    <div class="col">
        <div class="formsignup">
        <form>
        <div class="form-group">
            <label>Username</label>
            <input style="height:50px;font-size:20px" type="text" class="form-control" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label >Password</label>
            <input style="height:50px;font-size:20px" type="password" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label >Firstname</label>
            <input style="height:50px;font-size:20px" type="text" class="form-control" placeholder="Enter Firstname">
        </div>
        <div class="form-group">
            <label >Lastname</label>
            <input style="height:50px;font-size:20px" type="text" class="form-control" placeholder="Enter Lastname">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input style="height:50px;font-size:20px" type="email" class="form-control" placeholder="Enter Email">
        </div>
        </form>
        </div>
    </div>
    <div class="col">
        <div class="formsignup">
            <form>
            <div class="form-group" style="font-size:20px">
            <label>Choose Profile picture</label>
            <input type="file" class="form-control-file" >
            <br>
            <image src=""width="400px" height="400px"/>
            </div>
            </form>
        </div>        
    </div>

  </div>
</div>

<div class="center">
        <button class="btn btn-success buttonsignup" type="submit">Submit</button>
</div>
  



    









@endsection