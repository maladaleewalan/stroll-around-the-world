@extends('layouts.home')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
    <svg width="100%" height="510px"><rect width="100%" height="100%" fill="#F1948A"></rect></svg>
        <div class="container">
          <div class="carousel-caption center mr-5">
              <a href="{{route('guides.indexGuidesCountry',['id'=>1])}}">
              <img style="height: 450px; width:1000px" class="first-slide" src="{{url('image/maxresdefaultthai.jpg')}}" alt="First slide"></a>
          </div>
        </div>
    </div>

    <div class="carousel-item">
    <svg width="100%" height="510"><rect width="100%" height="100%" fill="#F1948A"></rect></svg>
        <div class="container">
          <div class="carousel-caption center mr-3">
              <a href="{{route('guides.indexGuidesCountry',['id'=>2])}}">
              <img style="height: 450px; width:1000px" class="first-slide" src="{{url('image/header-korea.png')}}" alt="First slide"></a>
          </div>
        </div>
    </div>

  <div class="carousel-item">
    <svg width="100%" height="510px"><rect width="100%" height="100%" fill="#F1948A"></rect></svg>
        <div class="container">
          <div class="carousel-caption center mr-5">
              <a href="{{route('guides.indexGuidesCountry',['id'=>4])}}">
              <img style="height: 450px; width:1000px" class="first-slide" src="{{url('image/untitled.jpg')}}" alt="First slide"></a>
          </div>
        </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  <div class="container">

      <div class="row mt-5">
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm"  style="background-color: #f48fb1">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="{{url('image/ΠΕΤΡΑ-9.jpg')}}" y="0%" x="0%" width="400px"></image></svg>
                  <div class="card-body">
                          <strong class="d-inline-block mb-2 text-success "><span class="fontnavinfo"><i class="fas fa-flag "></i><span class="ml-2 "></span>TOURISTGUIDE</span></strong>
                    <p class="card-text" style="color: black;">This content is crawled on Culture,Recommended foods and the major attraction of this country.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button onclick="window.location.href='{{route('guides.indexGuidesCountry',['id'=>1])}}'" type="button" class="w3-button w3-black">View</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
      <div class="col-md-4">
              <div class="card mb-4 shadow-sm" style="background-color: #f48fb1">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="{{url('image/envira-gallery.jpg')}}" y="-5%" x="-8%" width="400px"></image></svg>
                        <div class="card-body">
                              <strong class="d-inline-block mb-2 text-success "><span class="fontnavinfo"><i class="fas fa-images "></i><span class="ml-2"></span>GALLERY</span></strong>
                          <p class="card-text" style="color: black;">This content will gather photos on tourist guides and review image by other user or by admin...</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button onclick="window.location.href='{{route('posts.index')}}'" type="button" class="w3-button w3-black">View</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                          <div class="card mb-4 shadow-sm" style="background-color: #f48fb1">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect  fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="{{url('image/155.jpg')}}" y="0%" x="-17%" width="460px"></image></svg>
                            <div class="card-body">
                                  <strong class="d-inline-block mb-2 text-success "><span class="fontnavinfo"><i class="fas fa-percentage"></i><span class="ml-2"></span>PROMOTION</span></strong>
                              <p class="card-text" style="color: black;"> This content will gather information about the promotion of the airline. Or festivals of this country.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">view</button>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
</div> 


<!-- NEWS -->
<div data-scroll="1" class="aboutme-section sec-p100-bg-bs mb-30 clearfix blue " id="about">
  <div class="mt-2 ml-3" style="display:inline">
        <span class="titlepage">NEWS</span>
        <button onclick="window.location.href='{{route('stories.index')}}'" type="button" class="w3-button w3-black" style="float:right">Read more News</button>
  </div>
</div>

@for($i = 0;$i<2;$i++) 
<?php $cutstr = mb_substr($stories[$i]->detail,0,200,'UTF-8');  //จะโชว์เนื้อหาข่าวแค่บางส่วน
?>

<div data-scroll="1" style="" class="aboutme-section sec-p100-bg-bs mb-30 clearfix " id="about">
    <div class="personal-details-area secion-p100 mt-1 color" style="background-color:#f48fb1">
            <div class="container">
                <div class="row round2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about_us_image mt-1">
                            <img src='/image/{{$stories[$i]->picture}}' width="400px" height="250px" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="personal-details-right">
                            <div class="mt-1">
                                <br> <b class="newstitle showcountryname" ><i class="fas fa-map-marker-alt iconshowcountryname"></i>&nbsp;{{$stories[$i]->country->name}}</b><br>
                                <b class="newstitleindex">{{$stories[$i]->title}}</b>
                            </div>
                                <p class="news">{{$cutstr}} ......</p>
                                <span><i class="far fa-clock"></i> {{$stories[$i]->created_at->diffForHumans()}}</span> 
                                <span><button type="button" onclick="window.location.href='{{ route('stories.show', ['story' => $stories[$i]->id ]) }}'" class="w3-button w3-black floatright">Read more</button></span>
                            </div>       
                    </div>
                </div>
            </div>
        </div>
    </div>

@endfor


       
    <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-4">
        <header class="w3-container navpromotion"> 
          <span onclick="document.getElementById('id01').style.display='none'" 
          class="w3-button w3-display-topright">&times;</span>
          <h2 class="fontmodal">Promotion</h2>
        </header>
        <div class="container center">
            <a class="ml-3" href="https://www.airasiago.com.my/g/dd/dailydeals2?utm_campaign=ablabeltest&utm_medium=referral&utm_source=aahomepage&utm_content=holidaypackage|original"/>
            <img src="image/AirAsiaCom_WhiteBG-650x260.jpg" title="Air Asia" height="80px">
            </a>
            <a class="ml-3" href="https://www.royalorchidholidays.com/travel/arc.cfm?nav=b2cth">
            <img src="image/Thai-Airways-Logo.jpg" title="Thai Airways" height="80px"/>
            </a>
        </div>
        <div class="container center">
        <a  class="ml-3" href="https://www.thaitravelcenter.com/airticket/bangkokairways/?gclid=EAIaIQobChMIk4qv5c_m5AIVVAwrCh17DQd0EAAYASAAEgLXGvD_BwE"/>
            <img src="image/xpg_logo.gif.pagespeed.ic.gnyATXkHWs.png" title="Bangkok Airways" height="80px">
            </a>
            <a class="ml-3" href="https://www.tigerairtw.com/en/ready-to-go/special-offers"/>
            <img src="image/1123.jpg" title="tigerair" height="80px">
            </a>
        </div>
      </div>
    </div>


  </div>

  <script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>

   
@endsection