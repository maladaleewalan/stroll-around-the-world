@extends('layouts.home')

@section('content')
<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2"><i class="fas fa-edit iconsignup"></i>&nbsp;GUIDE 
        <?php if($regions->first() == null) { 
        } else { ?>
            {{$country->name}}</span><br>
        <?php } ?>
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

        <form action="{{route('guides.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="divcenter" style="margin-top:20px">
                <div class="formsignup" style="">
                
                <div class="form-group" style="margin-left:100px">
                <div class="input-group mb-3" style="width:700px;">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Choose Region</label>
                    </div>
                    <select name="region" class="custom-select"> 
                        @foreach($regions as $region) 
                            <option value={{$region->id}}
                                @if ($region->id == old('region',$region->name))
                                    selected="selected"
                                @endif> {{$region->name}}</option>
                        @endforeach
                    </select>
                </div>
                </div>

                <div class="form-group" style="margin-left:100px">

                    <div class="input-group mb-3" style="width:700px">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Type</label>
                        </div>
                        <select name="type" class="custom-select">
                        <option selected value="food" @if (old('type') == "food") {{ 'selected' }} @endif >Food</option>
                        <option value="place" @if (old('type') == "place") {{ 'selected' }} @endif >Place</option>
                        <option value="culture" @if (old('type') == "culture") {{ 'selected' }} @endif >Culture</option>
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
                    <label>Detail</label>
                    <textarea rows="5" style="width:700px;font-size:20px" class="form-control @error('detail') is-invalid @enderror" name="detail">{{old('detail')}}</textarea>
                    @error('detail')
                    <div class="alertinputfalse">{{$message}}</div>
                    @enderror
                </div>
                <br>
                <div class="form-group" style="margin-left:100px">
                        <input type="file" name="picture" class="form-control-file" style="width:700px;font-size:20px" >
                        @error('picture')
                        <div class="red">{{$message}}</div>
                        @enderror
                 
                    </div>
                
            </div>

     
<div class="center">
        <button class="btn btn-success buttonsignup floatright" type="submit">Submit</button>
        <a class="btn btn-danger buttonsignup floatleft" href="{{route('guides.indexGuidesCountry',['id'=>$country->id])}}" style="margin-left:60px;">Back</a>
</div>
</form>

@endsection