@extends('layouts.login')

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
                <img class="center image ml-5" src="{{url('gallery/67122170_855965881469505_4040380295556285236_n.jpg')}}" alt="Avatar" style="width:400px">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <br>
                <div><a class="editprofile" href="{{route('users.edit', ['user' => $user->id])}}"><i class="fas fa-user-edit"></i>edit</a></div>
                <div class="personal-details-right">
                    <h1 class="profile mt-5">USERNAME: {{$user->username}}</h1>

                    <?php if($user->role == 'user1') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i> POINT: {{$user->point}}</h1>
                    <?php    
                    } else if($user->role == 'user2') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i><i class="fas fa-star star"></i> POINT: {{$user->point}}</h1>
                    <?php    
                    } else if($user->role == 'user3') { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i> POINT: {{$user->point}}</h1>
                    <?php    
                    } else { ?>
                        <h1 class="profile mt-5" >LEVEL: <i class="fas fa-crown yellow" style="font-size:50px"></i> POINT: {{$user->point}}</h1>
                    <?php  
                    } ?>
                    <h1 class="profile mt-5">POST: {{$user->totalpost}}</h1>                                    
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
  <button onclick="document.getElementById('id03').style.display='block'" class="button ml-5"><span>POST</span></button>
  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background-color:#F2D7D5">


      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
        <b>Title<label class="nav-item dropdown" >

          <a class="nav-link dropdown" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Abroad</b></a>
<div class="dropdown-menu ">
            <a class="dropdown-item " href="#">Korea</a>
            <a class="dropdown-item " href="#">Japan</a>
            <a class="dropdown-item " href="#">Italy</a>
            <a class="dropdown-item " href="#">Scotland</a>
            <a class="dropdown-item " href="#">Sweden</a>
          </div>
        </label><label class="nav-item dropdown" >
          <a class="nav-link dropdown" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>type</b></a>
<div class="dropdown-menu ">
            <a class="dropdown-item " href="#">NEWS</a>
            <a class="dropdown-item " href="#">IMAGE</a>
          </div>
        </label></b>
          <input class="w3-input w3-border w3-margin-bottom" type="text" name="usrname" required>

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

      <div class="w3-container w3-border-top w3-padding-16" style="max-width:600px;background-color:#F2D7D5">
        <button onclick="document.getElementById('id03').style.display='none'" type="button" class="btn btn-danger">Cancel</button>
      </div>

    </div>
  </div>
</div>
@endsection