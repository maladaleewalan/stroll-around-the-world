@extends('layouts.home')

@section('content')

<div class="titlepage mt-2 ml-3">GALLERY
    <span class="titles" style="font-size:50px"><i class="fas fa-globe-americas america ml-2" style="font-size:50px"></i>
    <?php if($posts->first() == null) {  //ถ้าประเทศนั้นยังไม่มีช่าวจะnull
    } else {?> 
        &nbsp;{{$posts->first()->country->name}}</span>
    <?php } ?>

    <a class="dropdown choosecountry" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><i class="fas fa-mouse-pointer"></i>&nbsp;Choose Country</span></a>
    <div class="dropdown-menu ">
        @foreach ($countries as $country)
          <a class="dropdown-item titlenav" href="{{route('posts.indexPostsCountry',['id'=>$country->id])}}">{{$country->name}}</a>
        @endforeach
    </div> 
</div>

  @auth
  <button onclick="window.location.href='{{route('posts.create')}}'" class="button ml-5"><span>POST</span></button>
  @endauth

<div class="center">
  @foreach($posts as $post)
  <div class="divgallery"> 
  <p class="usernamepost"><i class="fas fa-user"></i> <a href="{{route('users.show',['user'=>$post->user->id])}}">{{$post->user->name}}</a></p>
    <!-- <p>{{$post->detail}}</p> -->

    <a href="{{route('posts.show' , ['post' => $post->id]) }}"><img class="shadow" src="/image/{{$post->picture}}" width="100%"></a>
    
    <br> <b class="newstitle showcountryname" ><i class="fas fa-map-marker-alt iconshowcountryname"></i>&nbsp;{{$post->country->name}}</b>
    <div class="like">
      @auth
      <button type="button" class="btn btn-light"><i class="fab fa-gratipay pink"></i> Like</button>
      @endauth
      <span> <i class="fas fa-thumbs-up blue" style="font-size:25px">: {{$post->like}}</i> </span>
    </div>
  </div>
  @endforeach
  </div>




   
@endsection