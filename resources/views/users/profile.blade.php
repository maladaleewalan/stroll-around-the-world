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
                <img class="center image ml-5" src="gallery/67122170_855965881469505_4040380295556285236_n.jpg" alt="Avatar" style="width:400px">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="personal-details-right">
                    <h1 class="profile mt-5">USERNAME: Thanapass</h1>
                    <h1 class="profile mt-5" >LEVEL: 3 POINT: 45000</h1>
                    <h1 class="profile mt-5">STATUS: ^[F].\{3\}[k]$</h1>
                    <h1 class="profile mt-5">POST: 1520</h1>                                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<h1><i class="fas fa-images iconprofile ml-5"><span class="ml-2">image#8</span></i></h1>
<div class="row center"> 
    <img src="gallery/thailand-40155070-1508147260-ImageGalleryLightboxLarge.jpg"  class="ml-5 mt-2" style="width:30%">
    <img src="gallery/photo-1528181304800-259b08848526.jpg"  class="ml-3 mt-2" style="width:30%">
    <img src="gallery/thailand-bangkok-marble-temple.jpg"  class="ml-3 mt-2" style="width:30%">
    <img src="gallery/krabi-sea-beach-1.jpg"  class="ml-5 mt-2" style="width:30%">
    <img src="gallery/skyline-of-bangkok-thailand.jpg"  class="ml-3 mt-2" style="width:30%">
    <img src="gallery/Thailand-Bangkok.jpg"  class="ml-3 mt-2" style="width:30%">
    <img src="gallery/DSC05526-1024x684.jpg"  class="ml-5 mt-2" style="width:30%">
    <img src="gallery/DSC05526-1024x684.jpg"  class="ml-3 mt-2" style="width:30%">

  </div>
  <button onclick="document.getElementById('id03').style.display='block'" class="button ml-5"><span>POST</span></button>
  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">


      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <b>TITLE<label class="nav-item dropdown" >
          <a class="nav-link dropdown" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Abroad</b></a>
<div class="dropdown-menu ">
            <a class="dropdown-item " href="#">Korea</a>
            <a class="dropdown-item " href="#">Japan</a>
            <a class="dropdown-item " href="#">Italy</a>
            <a class="dropdown-item " href="#">Scotland</a>
            <a class="dropdown-item " href="#">Sweden</a>
          </div>
        </label><label class="nav-item dropdown" >
          <a class="nav-link dropdown" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>TYPE</b></a>
<div class="dropdown-menu ">
            <a class="dropdown-item " href="#">NEWS</a>
            <a class="dropdown-item " href="#">IMAGE</a>
          </div>
        </label></b>
          <input class="w3-input w3-border w3-margin-bottom" type="text" name="usrname" required>
          <label><b>IMAGE</b></label>
          <input class="w3-input w3-border" type="password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">POST</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id03').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>
</div>
@endsection