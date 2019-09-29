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