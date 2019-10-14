@extends('layouts.home')

@section('content')
<div class="titlepage mt-2 ml-3">NEWS 
  <i class="fas fa-globe-americas america ml-2"></i><span class="titles ml-2">Thailand</span>    
</div>


@foreach ($stories as $story)
<?php $cutstr = mb_substr($story->detail,0,200,'UTF-8');  //จะโชว์เนื้อหาข่าวแค่บางส่วน
?>

<div class="boxnews">
<div data-scroll="1" style="width:80%" class="aboutme-section sec-p100-bg-bs mb-30 clearfix " id="about">
    <div class="personal-details-area secion-p100 mt-1 color" style="background-color:#f48fb1">
            <div class="container">
                <div class="row round2">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about_us_image mt-1">
                            <img src='image/{{$story->picture}}' width="400px" height="250px"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="personal-details-right">
                            <div class="mt-1">
                                <br>
                                <b class="newstitle"><i class="fas fa-newspaper mr-2"></i>{{$story->title}}</b>
                            </div>
                                <p class="news">{{$cutstr}} ......</p>
                                <span><i class="far fa-clock"></i> {{$story->created_at->diffForHumans()}}</span> <span><button type="button" onclick="window.location.href='{{ route('stories.show', ['story' => $story->id ]) }}'" class="w3-button w3-black floatright">Read more</button></span>
                           
                            </div>     
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                                                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach 

    
    <button onclick="document.getElementById('id03').style.display='block'" class="button ml-5"><span>POST</span></button>
   

      
       <div id="id03" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background-color:#F2D7D5">
            <form class="w3-container" action="{{route('stories.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="w3-section">
                    <b>Title<label class="nav-item dropdown" ></b>
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

@endsection