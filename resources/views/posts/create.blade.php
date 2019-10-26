@extends('layouts.home')

@section('content')
<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2"><i class="fas fa-images iconsignup"></i>&nbsp;POST</span><br>
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

        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="divcenter" style="margin-top:20px">
                <div class="formsignup" style="padding-left:10%">
                
                <div class="form-group">

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
                
                <div class="form-group">
                    <label >Caption</label>
                    <textarea rows="10" style="width:700px;font-size:20px" class="form-control @error('detail') is-invalid @enderror" name="detail">{{old('detail')}}</textarea>
                    @error('detail')
                    <div class="alertinputfalse">{{$message}}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                        <input type="file" name="picture" class="form-control-file">
                        @error('picture')
                        <div class="red">{{$message}}</div>
                        @enderror
                 
                    </div>
                
            </div>

     
<div class="center">
        <button class="btn btn-success buttonsignup floatright" type="submit">Submit</button>
        <a class="btn btn-danger buttonsignup floatleft" href="{{route('posts.index')}}">Back</a>
</div>
</form>

@endsection