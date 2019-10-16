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

  <button onclick="window.location.href='{{route('posts.create')}}'" class="button ml-5"><span>POST</span></button>


<div class="center">
  @foreach($posts as $post)
  <div class="divgallery"> 
  <p class="usernamepost"><i class="fas fa-user"></i> <a href="{{route('users.show',['user'=>3])}}">USERNAME</a></p>
    <!-- <p>{{$post->detail}}</p> -->
    <a href="{{route('posts.show' , ['post' => $post->id]) }}"><img src="/image/{{$post->picture}}" width="500px"></a>
    <div class="like">
      <button type="button" class="btn btn-light"><i class="fab fa-gratipay pink"></i> Like</button>
      <span> <i class="fas fa-thumbs-up blue">: {{$post->like}}</i> </span>
    </div>
  </div>
  @endforeach
  </div>




    <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background-color:#F2D7D5">
      <form class="w3-container" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="w3-section">
          <b>CAPTION<label class="nav-item dropdown" ></b>
          <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" rows="10">{{old('detail')}}</textarea>
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