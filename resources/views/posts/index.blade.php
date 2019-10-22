@extends('layouts.home')

@section('content')

<div class="titlepage mt-2 ml-3">GALLERY
  <i class="fas fa-globe-americas america ml-2"></i><span class="titles ml-2">Thailand</span>
    <a class="dropdown" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="titles">Region</span></a>
    <div class="dropdown-menu ">
      <a class="dropdown-item titlenav" href="#">Northern</a>
      <a class="dropdown-item titlenav" href="#">Northeastern</a>
      <a class="dropdown-item titlenav" href="#">Western</a>
      <a class="dropdown-item titlenav" href="#">Central</a>
      <a class="dropdown-item titlenav" href="#">Eastern</a>
      <a class="dropdown-item titlenav" href="#">Southern</a>
    </div>
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
    <a href="{{route('posts.show' , ['post' => $post->id]) }}"><img src="/image/{{$post->picture}}" width="100%"></a>
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