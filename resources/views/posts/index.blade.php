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

  <button onclick="document.getElementById('id03').style.display='block'" class="button ml-5"><span>POST</span></button>


  @foreach($posts as $post)
  <div class="divgallery"> 
  <p class="usernamepost"><i class="fas fa-user"></i> USERNAME</p>
    <p>{{$post->detail}}</p>
    <img src="gallery/thailand-40155070-1508147260-ImageGalleryLightboxLarge.jpg" width="500px">
    <div class="like">
      <button type="button" class="btn btn-light"><i class="fab fa-gratipay pink"></i> Like</button>
      <span> <i class="fas fa-thumbs-up blue">: {{$post->like}}</i> </span>
    </div>
  </div>
  @endforeach

    <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background-color:#F2D7D5">


      <form class="w3-container" action="">
        <div class="w3-section">
          <b>Title<label class="nav-item dropdown" ></b>
          <input class="w3-input w3-border w3-margin-bottom" type="text" id="title" name="title" required>
          <b>Description<label class="nav-item dropdown" ></b>
          <textarea class="form-control" id="content" name="content" rows="5" required/></textarea>
          <br>
          <label><b>IMAGE</b></label>
          <form>
            <div class="form-group" style="font-size:15px">
            <input type="file" class="form-control-file" >
            <br>
            <image src=""width="200px" height="200px"/>
            </div>

            </form>

          <button class="btn btn-success" type="submit">POST</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16" style="background-color:#F2D7D5">
        <button onclick="document.getElementById('id03').style.display='none'" type="button" class="btn btn-danger">Cancel</button>
      </div>

    </div>
  </div>
@endsection