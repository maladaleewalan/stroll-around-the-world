@extends('layouts.home')

@section('content')
<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2"><i class="fas fa-edit iconsignup"></i>&nbsp;EDIT GUIDE</span><br>
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

        <form action="{{route('guides.update',['guide'=>$guide->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="divcenter" style="margin-top:10px">
                <div class="formsignup" style="">
                
                <div class="form-group" style="margin-left:100px">
                    <!-- ไม่แก้ไขtype -->
                    <!-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Type</label>
                        </div>
                        <select name="type" class="custom-select">
                        <option selected value="food" @if (old('type') == "food") {{ 'selected' }} @endif >Food</option>
                        <option value="place" @if (old('type') == "place") {{ 'selected' }} @endif >Place</option>
                        <option value="culture" @if (old('type') == "culture") {{ 'selected' }} @endif >Culture</option>
                        </select>
                    </div> -->
                </div>
                <div class="form-group" style="margin-left:100px">
                    <label>Title</label>
                    <input style="width:700px;height:50px;font-size:20px" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title',$guide->title)}}">
                    @error('title')
                    <div class="alertinputfalse">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group" style="margin-left:100px">
                    <label >Detail</label>
                    <textarea rows="5" style="width:700px;font-size:20px" class="form-control @error('detail') is-invalid @enderror" name="detail">{{old('detail',$guide->detail)}}</textarea>
                    @error('detail')
                    <div class="alertinputfalse">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="form-group" style="margin-left:100px">
                        <input type="file" name="picture" class="form-control-file" style="width:700px;font-size:20px" >
                        @error('picture')
                        <div class="red">{{$message}}</div>
                        @enderror
                 
                    </div>
                
            </div>

     
<div class="center">
        <button class="btn btn-success buttonsignup floatright" type="submit">Submit</button>
        <a class="btn btn-danger buttonsignup floatleft" href="{{route('guides.indexGuidesCountryRegion' , ['id'=>$guide->region->country_id , 'regionid'=>$guide->region_id])}}" style="margin-left:60px;">Back</a>
</div>
</form>

@endsection