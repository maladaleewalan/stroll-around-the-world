<?php use App\Post; ?>
@extends('layouts.home')
@section('content')
<?php $previous = $post->id + 1;
$next = $post->id - 1;
$allpost = Post::get();
if($previous == 0) {
    $previous = 1;
}
if($next == $allpost->count()+1) {
    $next = $allpost->count();   //จำนวนข้อมูลในdb
}
?>

<div style="text-align: right;margin:80px 370px 0px 0px;" role="group">
    <form action="{{route('posts.destroy', ['post' => $post->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button class="editprofile btn btn-link red" type="submit"><i class="fas fa-trash-alt"></i>delete</button>
    </form>
    <button class="editprofile btn btn-link" onclick="document.getElementById('id03').style.display='block'">
        <i class="fas fa-edit"></i>edit
    </button>

</div>

<a href="{{ route('posts.show',['post'=> $previous]) }}"><i class="fas fa-chevron-circle-left buttonleft"></i></a>

<div class="divcenter divgalleryshow">
  <p class="usernamepost" style="font-size:30px"><i class="fas fa-user"></i> <a href="{{route('users.show',['user'=>3])}}">USERNAME</a></p>
     <p style="font-size:20px" >{{$post->detail}}</p>
     <div class="center">
   <img src="/image/{{$post->picture}}" width="1000px">
    </div>
    <div class="like">
      <button type="button" class="btn btn-light" style="font-size:20px"><i class="fab fa-gratipay pink" style="font-size:20px"></i> Like</button>
      &nbsp;<span> <i class="fas fa-thumbs-up blue" style="font-size:25px">: {{$post->like}}</i> </span>

      <button type="button" onclick="window.location.href='{{ route('posts.index')}}'" class="btn btn-light" style="font-size:20px;float:right"> <i class="fas fa-images"></i> Back to Gallery</button>

    </div>
  </div>

<a href="{{ route('posts.show',['post'=> $next]) }}"><i class="fas fa-chevron-circle-right buttonright"></i></a>



<div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background-color:#F2D7D5">
      <form class="w3-container" action="{{route('posts.update',['post' => $post->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="w3-section">
          <b>CAPTION<label class="nav-item dropdown" ></b>
          <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" rows="10">{{old('detail',$post->detail)}}</textarea>
          @error('detail')
          <div class="red">{{$message}}</div>
          @enderror
          <br>

          <label><b>IMAGE</b></label>
          <div class="form-group" style="font-size:15px">
            <input type="file" name="picture" class="form-control-file">
            @error('picture')
            <div class="red">{{$message}}</div>
            @enderror
           <br>
          </div>

            
          <button class="btn btn-success" type="submit">POST</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16" style="background-color:#F2D7D5">
        <button onclick="document.getElementById('id03').style.display='none'" type="button" class="btn btn-danger">Cancel</button>
      </div>

    </div>
  </div>

@endsection