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
            <div class="divcenter" style="margin-top:20px">
                <div class="formsignup" style="padding-left:10%">

                <div class="form-group">
                    <label>Country name</label>
                    <input style="width:700px;height:50px;font-size:20px" type="text" class="form-control @error('countryname') is-invalid @enderror" name="countryname" value="{{old('countryname')}}">
                    @error('countryname')
                    <div class="alertinputfalse">{{$message}}</div>
                    @enderror
                </div>
                <br>
            </div>

     
<div class="center">
        <button class="btn btn-success buttonsignup floatright" type="submit">Submit</button>
        <a class="btn btn-danger buttonsignup floatleft" href="{{route('firstpage')}}">Cancel</a>
</div>
</form>
@endsection