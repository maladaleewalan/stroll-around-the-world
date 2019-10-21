@extends('layouts.home')

@section('content')
<div class="titlepage mt-2 ml-3">NEWS 
  <i class="fas fa-globe-americas america ml-2"></i><span class="titles ml-2">Thailand</span>    
</div>


@foreach ($stories as $story)
<?php $cutstr = mb_substr($story->detail,0,200,'UTF-8');  //จะโชว์เนื้อหาข่าวแค่บางส่วน
?>

<div class="boxnews">
<div data-scroll="1" style="width:80%" class="aboutme-section sec-p100-bg-bs mb-30 clearfix " id="about">
    <div class="personal-details-area secion-p100 mt-1 color" style="background-color:#f48fb1">
            <div class="container">
                <div class="row round2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about_us_image mt-1">
                            <img src='image/{{$story->picture}}' width="400px" height="250px"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="personal-details-right">
                            <div class="mt-1">
                                <br>
                                <b class="newstitle"><i class="fas fa-newspaper mr-2"></i>{{$story->title}}</b>
                            </div>
                                <p class="news">{{$cutstr}} ......</p>
                                <span><i class="far fa-clock"></i> {{$story->created_at->diffForHumans()}}</span> <span><button type="button" onclick="window.location.href='{{ route('stories.show', ['story' => $story->id ]) }}'" class="w3-button w3-black floatright">Read more</button></span>
                           
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

    @auth
    <button onclick="window.location.href='{{route('stories.create')}}'" class="button ml-5"><span>POST</span></button>
    @endauth
    
@endsection