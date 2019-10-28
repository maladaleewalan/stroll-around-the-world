@extends('layouts.home')
@section('content')

<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2"><i class="fas fa-plus-square iconsignup"></i>&nbsp;Region
    </div>
</div>

<form action="{{route('regions.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <br><br>
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
                    <label>Region name</label>
                    <input style="width:700px;height:50px;font-size:20px" type="text" class="form-control @error('regionname') is-invalid @enderror" name="regionname" value="{{old('regionname')}}">
                    @error('regionname')
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