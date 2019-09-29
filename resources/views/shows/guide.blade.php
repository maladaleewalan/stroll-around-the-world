@extends('layouts.home')

@section('content')

<div class="titlepage mt-2 ml-3">TOURIST GUIDE
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
  <div class="container">

      <div class="row mt-5">
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm"  style="background-color: #8E44AD ">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="gallery/thai-som-tum.jpg.jpg" y="0%" x="-80%" width="900"></image></svg>
                  <div class="card-body">
                          <strong class="d-inline-block mb-2 text-success "><span class="fontnav"><i class="fas fa-flag green"></i><span class="ml-2 "></span>TOURISTGUIDE</span></strong>
                    <p class="card-text" style="color: #FADBD8;">This content is crawled on Culture,Recommended foods and the major attraction of this country.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary navview">View</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      <div class="col-md-4">
              <div class="card mb-4 shadow-sm" style="background-color: #8E44AD ">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="gallery/tHO98STFIB.jpg" y="-5%" x="-25%" width="935px"></image></svg>
                        <div class="card-body">
                              <strong class="d-inline-block mb-2 text-success "><span class="fontnav"><i class="fas fa-images greens"></i><span class="ml-2"></span>GALLERRY</span></strong>
                          <p class="card-text" style="color: #FADBD8;">This content will gather photos on tourist guides and review image by other user or by admin...</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary navview">View</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                          <div class="card mb-4 shadow-sm" style="background-color: #8E44AD ">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect  fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="gallery/595aecb0377ed66c5a707e5a6aae07ea.jpg" y="0%" x="-57%" width="720px"></image></svg>
                            <div class="card-body">
                                  <strong class="d-inline-block mb-2 text-success "><span class="fontnav"><i class="fas fa-percentage greens"></i><span class="ml-2"></span>PROMOTION</span></strong>
                              <p class="card-text" style="color: #FADBD8;"> This content will gather information about the promotion of the airline. Or festivals of this country.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="homework.html">
                                  <button type="button" class="btn btn-sm btn-outline-secondary navview">View</button></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

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