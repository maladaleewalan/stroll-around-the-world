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
 
@endsection