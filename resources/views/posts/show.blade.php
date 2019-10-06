<?php use App\Post; ?>
@extends('layouts.home')
@section('content')
<?php $previous = $post->id - 1;
$next = $post->id + 1;
$allpost = Post::get();
if($previous == 0) {
    $previous = $allpost->count();   //จำนวนข้อมูลในdb
}
if($next == $allpost->count()+1) {
    $next = 1;
}
?>


<a href="{{ route('posts.show',['post'=> $previous]) }}"><i class="fas fa-chevron-circle-left buttonleft"></i></a>

<div class="divcenter divgalleryshow">
  <p class="usernamepost" style="font-size:30px"><i class="fas fa-user"></i> <a href="{{route('users.show',['user'=>3])}}">USERNAME</a></p>
     <p style="font-size:20px" >{{$post->detail}}</p>
     <div class="center">
   <img src="{{url('gallery/thailand-40155070-1508147260-ImageGalleryLightboxLarge.jpg')}}" width="1000px">
    </div>
    <div class="like">
      <button type="button" class="btn btn-light" style="font-size:20px"><i class="fab fa-gratipay pink" style="font-size:20px"></i> Like</button>
      &nbsp;<span> <i class="fas fa-thumbs-up blue" style="font-size:25px">: {{$post->like}}</i> </span>

      <button type="button" onclick="window.location.href='{{ route('posts.index')}}'" class="btn btn-light" style="font-size:20px;float:right"> <i class="fas fa-images"></i> Back to Gallery</button>

    </div>
  </div>

<a href="{{ route('posts.show',['post'=> $next]) }}"><i class="fas fa-chevron-circle-right buttonright"></i></a>
@endsection