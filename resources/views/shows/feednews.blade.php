@extends('layouts.login')
@section('content')
<div class="titlepage mt-2 ml-3">FEEDNEWS
</div>
<div class="boxnews">
<div class="newstimeline">
<h3>username</h3>
<h5>captioncaptioncaptioncaptioncaptioncaptioncaptioncaption<h5>
<img src="gallery/bangkok-grand-palace.jpg" width="400px" alt="">
</div>

<div class="newstimeline">
<h3>username</h3>
<h5>captioncaptioncaptioncaptioncaptioncaptioncaptioncaption<h5>
<img src="gallery/bangkok-grand-palace.jpg" width="400px" alt="">
</div>

<div class="newstimeline">
<h3>username</h3>
<h5>captioncaptioncaptioncaptioncaptioncaptioncaptioncaption<h5>
<img src="gallery/bangkok-grand-palace.jpg" width="400px" alt="">
</div>

<div class="newstimeline">
<h3>username</h3>
<h5>captioncaptioncaptioncaptioncaptioncaptioncaptioncaption<h5>
<img src="gallery/bangkok-grand-palace.jpg" width="400px" alt="">
</div>

<div class="newstimeline">
<h3>username</h3>
<h5>captioncaptioncaptioncaptioncaptioncaptioncaptioncaption<h5>
<img src="gallery/bangkok-grand-palace.jpg" width="400px" alt="">
</div>
</div>


    <button onclick="document.getElementById('id03').style.display='block'" class="button ml-5"><span>POST</span></button>
   

   <div id="id03" class="w3-modal">
<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background-color:#F2D7D5">


  <form class="w3-container" action="">
    <div class="w3-section">
      <b>Title<label class="nav-item dropdown" ></b>

      
      </label><label class="nav-item dropdown" >
      <a class="nav-link dropdown" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Type</b></a>
<div class="dropdown-menu ">
        <a class="dropdown-item " href="#">TYPE1</a>
        <a class="dropdown-item " href="#">TYPE2</a>
        <a class="dropdown-item " href="#">TYPE3</a>
      </div>
    </label>


      <input class="w3-input w3-border w3-margin-bottom" type="text" id="title" name="title" required>




      <b>Description<label class="nav-item dropdown" ></b>
      <textarea class="form-control" id="content" name="content" rows="5" required/></textarea>
      <br>
      <label><b>IMAGE</b></label>
      <!-- <input class="w3-input w3-border" type="password" name="psw" required> -->
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