<?php use App\Post; ?>
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
                <img  class="center image ml-5" src="/image/{{$user->picture}}" width="400px"> 
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <br>

                <?php $id = Auth::user()->id ?>
                @auth
                @if(Auth::id() === $user->id)
                <div><a class="editprofile" href="{{route('users.edit', ['user' => $id])}}"><i class="fas fa-user-edit"></i>edit</a></div>
                @endif
                @endauth
                <div class="personal-details-right">
                    <h1 class="profile mt-5">NAME: {{$user->name}}</h1>

                    <?php if($user->role == 'user1') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i> POINT: {{$user->point}}</h1>
                        <h1 class="profile mt-5">POST: {{$user->totalpost}}</h1>                                    
                    <?php    
                    } else if($user->role == 'user2') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i><i class="fas fa-star star"></i> POINT: {{$user->point}}</h1>
                        <h1 class="profile mt-5">POST: {{$user->totalpost}}</h1>                                    

                    <?php    
                    } else if($user->role == 'user3') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i> POINT: {{$user->point}}</h1>
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
<h1><i class="fas fa-images iconprofile ml-5"><span class="ml-2">Posts</span></i></h1>
<div class="center"> 
    <?php $posts = Post::orderBy('created_at','desc')->get();?>  
        @foreach($posts as $post) 
        <?php if($post->user->id == $user->id) {?>
            <img src="/image/{{$post->picture}}" class="ml-5 mt-2" style="width:500px">
        <?php }?>
        @endforeach
  </div>
  
@endsection