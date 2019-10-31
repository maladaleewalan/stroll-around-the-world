@extends('layouts.home')

@section('content')
<div class="center">
<div class="divsignup">
<span class="titlepage center mr-2">PROFILE</span>&nbsp;<i class="fas fa-user-circle iconsignup"></i><br>
<br>
</div>
</div>
<div class="personal-details-area secion-p100 mt-5">
    <div class="container">
        <div class="row round2">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="about_us_image mt-5">
                <img  class="center image ml-5 shadow" src="/image/{{$user->picture}}" width="350px"> 
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <br>

                <?php $id = Auth::user()->id ?>
                @auth
                @if(Auth::id() === $user->id)
                <div><a class="editprofile" style="font-size:20px;" href="{{route('users.edit', ['user' => $id])}}"><i class="fas fa-user-edit"></i>edit</a></div>
                @endif
                @endauth
                <div class="personal-details-right">
                    <br>
                    <h1 class="profile mt-5">NAME: {{$user->name}}</h1>

                    <?php if($user->role == 'user1') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i></h1><h1 class="profile mt-5"> POINT: {{$user->point}}</h1>
                        <h1 class="profile mt-5">POST: {{$user->totalpost}}</h1>                                    
                    <?php    
                    } else if($user->role == 'user2') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i><i class="fas fa-star star"></i></h1><h1 class="profile mt-5">POINT: {{$user->point}}</h1>
                        <h1 class="profile mt-5">POST: {{$user->totalpost}}</h1>                                    

                    <?php    
                    } else { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-crown yellow" style="font-size:50px"></i></h1>
                    <?php  
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- ทำ favorite -->
<!-- <i class="fas fa-heart iconprofile ml-5" style="font-size:30px"></i><span class="ml-2" style="font-size:30px">Favorite</span></i>
<div class="divcenter" style="width:90%"> 
        @foreach($posts as $post) 
        <a href="{{route('posts.show' , ['post' => $post->id]) }}"><img src="/image/{{$post->picture}}" class="ml-5 mt-2 shadow" style="width:500px"></a>
   
        @endforeach
</div> -->
<!-- จบตรงนี้ -->
@if(count($posts) != 0) 
    <i class="fas fa-images iconprofile ml-5" style="font-size:30px"><span class="ml-2" style="font-size:30px">Posts</span></i>
@endif
<div class="divcenter" style="width:90%;margin-left:5%"> 
        @foreach($posts as $post) 
        <a href="{{route('posts.show' , ['post' => $post->id]) }}"><img src="/image/{{$post->picture}}" class="ml-5 mt-2 shadow" style="width:29%"></a>
   
        @endforeach
</div>

@if(count($stories) != 0)
    <i class="fas fa-edit iconprofile ml-5" style="font-size:30px"><span class="ml-2" style="font-size:30px">News</span></i>
@endif
<div class="divcenter" style="width:100%"> 
@foreach ($stories as $story)
<?php $cutstr = mb_substr($story->detail,0,200,'UTF-8');  //จะโชว์เนื้อหาข่าวแค่บางส่วน
?>

<div class="boxnews">
<div class="aboutme-section sec-p100-bg-bs mb-30 clearfix " id="about">
    <div class="personal-details-area secion-p100 mt-1 color" style="background-color:#f48fb1">
            <div class="container">
                <div class="row round2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about_us_image mt-1">
                            <img class="shadow" src='/image/{{$story->picture}}' width="400px" height="250px"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="personal-details-right">
                            <div class="mt-1">
                                <br> <b class="newstitle showcountryname" ><i class="fas fa-map-marker-alt iconshowcountryname"></i>&nbsp;{{$story->country->name}}</b>
                                <br>
                                <b class="newstitleindex">{{$story->title}}</b>
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
<hr>

@endforeach 
</div>


  
@endsection