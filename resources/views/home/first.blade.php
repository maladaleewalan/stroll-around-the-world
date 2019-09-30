@extends('layouts.home')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>

    <div class="carousel-inner">
    
    <div class="carousel-item active">
        <svg width="100%" height="510px"><rect width="100%" height="100%" fill="#F1948A"></rect></svg>
        <div class="container">
          <div class="carousel-caption center mr-5">
              <a href="{{action('ShowsController@guide')}}">
              <img style="height: 450px; width:1000px" class="first-slide" src="gallery/maxresdefault.jpg" alt="First slide"></a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <svg width="100%" height="510"><rect width="100%" height="100%" fill="#F1948A"></rect></svg>
        <div class="container">
          <div class="carousel-caption center mr-3">
              <img style="height: 450px; width:1000px" class="first-slide" src="gallery/japan-fuji-mountain-himeji-castle-full-cherry-blossom-h.jpg" alt="First slide">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg width="100%" height="510px"><rect width="100%" height="100%" fill="#F1948A"></rect></svg>
        <div class="container">
          <div class="carousel-caption center mr-5">
              <img style="height: 450px; width:1000px" class="first-slide" src="gallery/Japan--header-image.jpg" alt="First slide">
          </div>
        </div>
      </div>
      

      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  <div class="container">

      <div class="row mt-5">
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm"  style="background-color: #8E44AD ">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="gallery/ΠΕΤΡΑ-9.jpg" y="0%" x="0%" width="400px"></image></svg>
                  <div class="card-body">
                          <strong class="d-inline-block mb-2 text-success "><span class="fontnav"><i class="fas fa-flag green"></i><span class="ml-2 "></span>TOURISTGUIDE</span></strong>
                    <p class="card-text" style="color: #FADBD8;">This content is crawled on Culture,Recommended foods and the major attraction of this country.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button onclick="window.location.href='{{action('ShowsController@guide')}}'" type="button" class="w3-button w3-black">View</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
      <div class="col-md-4">
              <div class="card mb-4 shadow-sm" style="background-color: #8E44AD ">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="gallery/envira-gallery.jpg" y="-5%" x="-8%" width="400px"></image></svg>
                        <div class="card-body">
                              <strong class="d-inline-block mb-2 text-success "><span class="fontnav"><i class="fas fa-images greens"></i><span class="ml-2"></span>GALLERRY</span></strong>
                          <p class="card-text" style="color: #FADBD8;">This content will gather photos on tourist guides and review image by other user or by admin...</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button onclick="window.location.href='{{action('ShowsController@gallery')}}'" type="button" class="w3-button w3-black">View</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                          <div class="card mb-4 shadow-sm" style="background-color: #8E44AD ">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect  fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="gallery/155.jpg" y="0%" x="-17%" width="460px"></image></svg>
                            <div class="card-body">
                                  <strong class="d-inline-block mb-2 text-success "><span class="fontnav"><i class="fas fa-percentage greens"></i><span class="ml-2"></span>PROMOTION</span></strong>
                              <p class="card-text" style="color: #FADBD8;"> This content will gather information about the promotion of the airline. Or festivals of this country.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">view</button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
</div>



<div data-scroll="1" class="aboutme-section sec-p100-bg-bs mb-30 clearfix blue " id="about">
<div class="titlepage mt-2 ml-3" style="display:inline;background-color:#8E44AD">NEWS</div>
       <button onclick="window.location.href='{{action('ShowsController@news')}}'" type="button" class="w3-button w3-black" style="float:right">Read more News</button>
      
    <div class="personal-details-area secion-p100 mt-1 color">
            <div class="container">
                <div class="row round2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about_us_image mt-1">
                            <img src="gallery/Thai-healthcare.jpg" width="400px" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="personal-details-right">
                            <div class="mt-1">
                                <b class="newstitle"><i class="fas fa-newspaper greens mr-2"></i>Thailand ranked sixth best in the world for healthcare</div></b>
                                <p class="news ">Sixth best healthcare system in the world! Well done Thailand. The Kingdom is gaining worldwide recognition for quality healthcare services after placing sixth in a ranking...</p>
                            </div>     
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-scroll="1" class="aboutme-section sec-p100-bg-bs mb-30 clearfix blue " id="about">
        <div class="personal-details-area secion-p100 mt-1 color">
                <div class="container">
                    <div class="row round2">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="about_us_image mt-1">
                                <img src="gallery/IMG_2415-1080x675.jpg" width="400px" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="personal-details-right">
                                <div class="mt-1">
                                    <b class="newstitle"><i class="fas fa-newspaper greens mr-2"></i>Phuket social enterprise shop takes the first steps</div></b>
                                    <p class="news ">PHOTOS:stepswiththeera.com A Bangkok-based social enterprise has made its debut in Phuket as it opened a new zero-waste shop, cafe and vocational training centre in Cherng...</p>
                                </div>     
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div>
      
        </div>


        
    <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-4">
        <header class="w3-container w3-teal"> 
          <span onclick="document.getElementById('id01').style.display='none'" 
          class="w3-button w3-display-topright">&times;</span>
          <h2 class="fontmodal">Promotion</h2>
        </header>
        <div class="container center">
            <a class="ml-3" href="https://www.airasiago.com.my/g/dd/dailydeals2?utm_campaign=ablabeltest&utm_medium=referral&utm_source=aahomepage&utm_content=holidaypackage|original"/>
            <img src="gallery/AirAsiaCom_WhiteBG-650x260.jpg" title="Air Asia" height="80px">
            </a>
            <a class="ml-3" href="https://www.royalorchidholidays.com/travel/arc.cfm?nav=b2cth">
            <img src="gallery/Thai-Airways-Logo.jpg" title="Thai Airways" height="80px"/>
            </a>
        </div>
        <div class="container center">
        <a  class="ml-3" href="https://www.thaitravelcenter.com/airticket/bangkokairways/?gclid=EAIaIQobChMIk4qv5c_m5AIVVAwrCh17DQd0EAAYASAAEgLXGvD_BwE"/>
            <img src="gallery/xpg_logo.gif.pagespeed.ic.gnyATXkHWs.png" title="Bangkok Airways" height="80px">
            </a>
            <a class="ml-3" href="https://www.tigerairtw.com/en/ready-to-go/special-offers"/>
            <img src="gallery/1123.jpg" title="tigerair" height="80px">
            </a>


        </div>
      </div>
    </div>
  </div>

  <script>
  // Get the modal
  var modal = document.getElementById('promotion');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>

   
@endsection