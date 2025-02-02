@extends('layouts.home')
@section('content')

<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2"><i class="fas fa-plus-square iconsignup"></i>&nbsp;Country
    </div>
</div>

<form action="{{route('countries.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <br><br>
            <div class="divcenter">
                <div class="formsignup" >

                <div class="form-group" style="margin-left:100px">
                    <label>Country name</label>
                    <input style="width:700px;height:50px;font-size:20px;" type="text" class="form-control @error('countryname') is-invalid @enderror" name="countryname" value="{{old('countryname')}}">
                    @error('countryname')
                    <div class="alertinputfalse">{{$message}}</div>
                    @enderror
                </div>
                <br>
            </div>

     
<div class="center" style="">
        <button class="btn btn-success buttonsignup floatright" type="submit">Submit</button>
        <a class="btn btn-danger buttonsignup floatleft" href="{{route('firstpage')}}" style="margin-left:60px;">Cancel</a>
</div>
</form>
@endsection