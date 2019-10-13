@extends('layouts.home')

@section('content')

<div class="titlepage mt-2 ml-3">TOURIST GUIDE
  <i class="fas fa-globe-americas america ml-2"></i><span class="titles ml-2">Thailand</span>
    <a class="dropdown" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="titles">RegioN</span></a>
    <div class="dropdown-menu ">
      <a class="dropdown-item titlenav" href="#">Northern</a>
      <a class="dropdown-item titlenav" href="#">Northeastern</a>
      <a class="dropdown-item titlenav" href="#">Western</a>
      <a class="dropdown-item titlenav" href="#">Central</a>
      <a class="dropdown-item titlenav" href="#">Eastern</a>
      <a class="dropdown-item titlenav" href="#">Southern</a>
    </div>
    <button class=" btn btn-link addguide mt-4" onclick="document.getElementById('id03').style.display='block'"><i class="fas fa-plus-square "></i></button>
  </div>
  <div class="container">

      <div class="row mt-5">
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm"  style="background-color: #f48fb1 ">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="gallery/thai-som-tum.jpg.jpg" y="0%" x="-80%" width="900"></image></svg>
                  <div class="card-body">
                          <strong class="d-inline-block mb-2 text-success "><span class="fontnavinfo"><i class="fas fa-utensils"></i><span class="ml-2 ">FOOD</span></strong>
                    <p class="card-text" style="color: black;">Click to view the most popular food of this country.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" onclick="document.getElementById('modalfood').style.display='block'" class="w3-button w3-black">View</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      <div class="col-md-4">
              <div class="card mb-4 shadow-sm" style="background-color: #f48fb1 ">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="gallery/tHO98STFIB.jpg" y="-5%" x="-25%" width="935px"></image></svg>
                        <div class="card-body">
                              <strong class="d-inline-block mb-2 text-success "><span class="fontnavinfo"><i class="fas fa-map-marker-alt"></i><span class="ml-2">PLACE</span></strong>
                          <p class="card-text" style="color: black;">Click to view locations Tourism of this country.</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                             <button type="button" onclick="document.getElementById('modalplace').style.display='block'" class="w3-button w3-black">View</button>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                          <div class="card mb-4 shadow-sm" style="background-color: #f48fb1 ">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect  fill="#F1948A" width="100%" height="100%"></rect><image xlink:href="gallery/595aecb0377ed66c5a707e5a6aae07ea.jpg" y="0%" x="-57%" width="720px"></image></svg>
                            <div class="card-body">
                                  <strong class="d-inline-block mb-2 text-success "><span class="fontnavinfo"><i class="fas fa-smile"></i><span class="ml-2">CULTURE</span></strong>
                              <p class="card-text" style="color: black;">Click to view the custom and the culture of this country.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" onclick="document.getElementById('modalculture').style.display='block'" class="w3-button w3-black">View</button></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

</div>


    <div id="modalfood" class="w3-modal">
      <div class="w3-modal-content w3-card-4" style="background-color:#F2D7D5">
      
        <header class="w3-container navpromotion"> 
          <span onclick="document.getElementById('modalfood').style.display='none'" 
          class="w3-button w3-display-topright">&times;</span>
          <h2 class="fontmodal"><strong class="d-inline-block mb-2"><span class="fontnavinfo" style="font-size:30px"><i class="fas fa-utensils"></i><span class="ml-2 ">FOOD</span></strong></h2>
        </header>

        @foreach ($guides as $guide)
        <div class="modalguide">
        <?php if($guide->type == 'food') { ?>
          <button class="editprofile btn btn-link" onclick="document.getElementById('id04').style.display='block'"><i class="fas fa-edit"></i>edit</button>
            <p style="font-weight:bold" class="fontmodaltitle">{{$guide->title}}</p>
            <p class="fontmodaldetail">{{$guide->detail}}</p>
            <div class="center">
            <img src='image/{{$guide->picture}}' width="400px"/></div>
        <?php } ?>
        </div>
        @endforeach

      </div>
    </div>



    <div id="modalplace" class="w3-modal">
      <div class="w3-modal-content w3-card-4" style="background-color:#F2D7D5">
      
        <header class="w3-container navpromotion"> 
          <span onclick="document.getElementById('modalplace').style.display='none'" 
          class="w3-button w3-display-topright">&times;</span>
          <h2 class="fontmodal"><strong class="d-inline-block mb-2"><span class="fontnavinfo" style="font-size:30px"><i class="fas fa-map-marker-alt"></i><span class="ml-2">PLACE</span></strong></h2>
          </header>

        @foreach ($guides as $guide)
        <div class="modalguide">
        <?php if($guide->type == 'place') { ?>
          <button class="editprofile btn btn-link" onclick="document.getElementById('id04').style.display='block'"><i class="fas fa-edit"></i>edit</button>
            <p style="font-weight:bold" class="fontmodaltitle">{{$guide->title}}</p>
            <p class="fontmodaldetail">{{$guide->detail}}</p>
            <div class="center">
            <img src='image/{{$guide->picture}}' width="400px"/></div>
        <?php } ?>
        </div>
        @endforeach

      </div>
    </div>




    <div id="modalculture" class="w3-modal">
      <div class="w3-modal-content w3-card-4" style="background-color:#F2D7D5">
      
        <header class="w3-container navpromotion"> 
          <span onclick="document.getElementById('modalculture').style.display='none'" 
          class="w3-button w3-display-topright">&times;</span>
          <h2 class="fontmodal"><strong class="d-inline-block mb-2"><span class="fontnavinfo" style="font-size:30px"><i class="fas fa-smile"></i><span class="ml-2">CULTURE</span></strong></h2>
          </header>

        @foreach ($guides as $guide)
        <div class="modalguide">
        <?php if($guide->type == 'culture') { ?>
          <button class="editprofile btn btn-link" onclick="document.getElementById('id04').style.display='block'"><i class="fas fa-edit"></i>edit</button>
            <p style="font-weight:bold" class="fontmodaltitle">{{$guide->title}}</p>
            <p class="fontmodaldetail">{{$guide->detail}}</p>
            <div class="center">
            <img src='image/{{$guide->picture}}' width="400px"/></div>
        <?php } ?>
        </div>
        @endforeach

      </div>
    </div>
     
    <div id="id03" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background-color:#F2D7D5">
            <form class="w3-container" action="{{route('guides.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="w3-section">
                    <b>Title<label class="nav-item dropdown" ></b><a class="dropdown ml-3" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Type:---</b></span></a>
                  <div class="dropdown-menu ">
                    <a class="dropdown-item titlenav" href="#">Food</a>
                    <a class="dropdown-item titlenav" href="#">Place</a>
                    <a class="dropdown-item titlenav" href="#">Culture</a>
                  </div>
                  <br>
                    <input type="text" name="title"  class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                    @error('title')
                    <div class="red">{{$message}}</div>
                    @enderror

                    <br>
                    <b>Description<label class="nav-item dropdown" ></b>
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
  <div id="id04" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background-color:#F2D7D5">
            <form class="w3-container" action="{{route('guides.update',['guide'=>$guide->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w3-section">
                    <b>Title<label class="nav-item dropdown" ></b>
                    <input type="text" name="title"  class="form-control @error('title') is-invalid @enderror" value="{{old('title',$guide->title)}}">
                    @error('title')
                    <div class="red">{{$message}}</div>
                    @enderror

                    <br>
                    <b>Description<label class="nav-item dropdown" ></b>
                    <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" rows="10">{{old('detail',$guide->detail)}}</textarea>
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