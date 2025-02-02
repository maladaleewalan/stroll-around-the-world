@extends('layouts.home')

@section('content')
<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2"><i class="fas fa-plus-square iconsignup"></i>&nbsp;NEWS</span><br>
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

        <form action="{{route('stories.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="divcenter" style="margin-top:20px">
                <div class="formsignup" >
                <div class="form-group" style="margin-left:100px">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Choose Country</label>
                        </div>
                        <select name="country" class="custom-select">
                            @foreach($countries as $country) 
                                <option value={{$country->id}}
                                    @if ($country->id == old('country',$country->name))
                                        selected="selected"
                                    @endif> {{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>

                <div class="form-group" style="margin-left:100px">
                    <label>Title</label>
                    <input style="width:700px;height:50px;font-size:20px" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                    @error('title')
                    <div class="alertinputfalse">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group" style="margin-left:100px">
                    <label >Detail</label>
                    <textarea rows="10" style="width:700px;font-size:20px" class="form-control @error('detail') is-invalid @enderror" name="detail">{{old('detail')}}</textarea>
                    @error('detail')
                    <div class="alertinputfalse">{{$message}}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group" style="margin-left:100px">
                        <input type="file" name="picture" class="form-control-file" style="font-size:20px">
                        @error('picture')
                        <div class="red">{{$message}}</div>
                        @enderror
                 
                    </div>
                
            </div>

     
<div class="center">
        <button class="btn btn-success buttonsignup floatright" type="submit">Submit</button>
        <a class="btn btn-danger buttonsignup floatleft" href="{{route('stories.index')}}" style="margin-left:60px;">Back</a>
</div>
</form>

@endsection