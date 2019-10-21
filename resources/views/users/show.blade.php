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
                <div><a class="editprofile" href="{{route('users.edit', ['user' => $id])}}"><i class="fas fa-user-edit"></i>edit</a></div>
                @endauth
                <div class="personal-details-right">
                    <h1 class="profile mt-5">NAME: {{Auth::user()->name}}</h1>

                    <?php if($user->role == 'user1') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i> POINT: {{$user->point}}</h1>
                        <h1 class="profile mt-5">POST: {{Auth::user()->totalpost}}</h1>                                    
                    <?php    
                    } else if($user->role == 'user2') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i><i class="fas fa-star star"></i> POINT: {{$user->point}}</h1>
                        <h1 class="profile mt-5">POST: {{Auth::user()->totalpost}}</h1>                                    

                    <?php    
                    } else if($user->role == 'user3') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i> POINT: {{$user->point}}</h1>
                        <h1 class="profile mt-5">POST: {{Auth::user()->totalpost}}</h1>                                    

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
<div class="row center"> 
    <img src="{{url('gallery/thailand-40155070-1508147260-ImageGalleryLightboxLarge.jpg')}}" class="ml-5 mt-2" style="width:30%">
    <img src="{{url('gallery/thailand-40155070-1508147260-ImageGalleryLightboxLarge.jpg')}}"  class="ml-3 mt-2" style="width:30%">
    <img src="{{url('gallery/thailand-bangkok-marble-temple.jpg')}}"  class="ml-3 mt-2" style="width:30%">
    <img src="{{url('gallery/krabi-sea-beach-1.jpg')}}"  class="ml-5 mt-2" style="width:30%">
    <img src="{{url('gallery/skyline-of-bangkok-thailand.jpg')}}"  class="ml-3 mt-2" style="width:30%">
    <img src="{{url('gallery/Thailand-Bangkok.jpg')}}"  class="ml-3 mt-2" style="width:30%">
    <img src="{{url('gallery/DSC05526-1024x684.jpg')}}"  class="ml-5 mt-2" style="width:30%">
    <img src="{{url('gallery/DSC05526-1024x684.jpg')}}"  class="ml-3 mt-2" style="width:30%">

  </div>
  
@endsection