@extends('layouts.home')

@section('content')
<div class="titlepage mt-2 ml-3">Check NEWS 
  <i class="fas fa-check-circle america ml-2" style="font-size:50px"></i>
</div>


@foreach ($stories as $story)

<div class="boxnews">
<div class="aboutme-section sec-p100-bg-bs mb-30 clearfix " id="about">
    <div class="personal-details-area secion-p100 mt-1 color" style="background-color:#f48fb1">
            <div class="container">
                <div class="row round2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about_us_image mt-1">
                            <br>
                            <img class="shadow" src='image/{{$story->picture}}' width="500px" height="300px"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="personal-details-right">
                            <div class="mt-1">
                                <br> <b class="newstitle showcountryname" ><i class="fas fa-map-marker-alt iconshowcountryname"></i>&nbsp;{{$story->country->name}}</b>
                                <br>
                                <b class="newstitleindex">{{$story->title}}</b>
                            </div>
                                <p class="news">{{$story->detail}}</p>  
                                <a href="{{route('stories.Newspass',['id'=>$story->id])}}" class="floatright buttonp"><i class="fas fa-check-circle buttonpass"></i></a>                      
                                <a href="{{route('stories.Newsnotpass',['id'=>$story->id])}}" class="floatright buttonp"><i class="fas fa-times-circle buttonnotpass"></i></a>                   
                            </div>     
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach 
    
@endsection