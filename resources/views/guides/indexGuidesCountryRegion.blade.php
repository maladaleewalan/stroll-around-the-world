@extends('layouts.home')

@section('content')
<div class="titlepage mt-2 ml-3">TOURIST GUIDE
  <i class="fas fa-globe-americas america ml-2"></i>
  <?php if($guides->first() == null) {  //ถ้าประเทศนั้นยังไม่มี guide จะnull
    } else {?> 
        <span class="titles ml-2">{{$guides->first()->region->name}}</span>
    <?php } ?>


  <a class="dropdown choosecountry" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><i class="fas fa-mouse-pointer"></i>&nbsp;Choose Region</span></a>
    <div class="dropdown-menu ">
        @foreach ($regions as $region)
          <a class="dropdown-item titlenav" href="">{{$region->name}}</a>
        @endforeach
    </div> 


    @auth
    @if(Auth::user()->role == 'admin') 
    <button class=" btn btn-link addguide mt-4" onclick="window.location.href='{{route('guides.create')}}'"><i class="fas fa-plus-square "></i></button>
    @endif
    @endauth
  </div>


  <div class="center" style="margin:30px 30px 0px 30px">
  <div class="row">
    <div class="col-sm divguide" style="text-align:center">
        <h2 class="fontmodal"><strong class="d-inline-block mb-2"><span class="fontnavinfo" style="font-size:30px"><i class="fas fa-utensils"></i><span class="ml-2 ">FOOD</span></strong></h2>
    </div>
    <div class="col-sm divguide" style="text-align:center">
        <h2 class="fontmodal"><strong class="d-inline-block mb-2"><span class="fontnavinfo" style="font-size:30px"><i class="fas fa-map-marker-alt"></i><span class="ml-2">PLACE</span></strong></h2>
    </div>
    <div class="col-sm divguide" style="text-align:center">
        <h2 class="fontmodal"><strong class="d-inline-block mb-2"><span class="fontnavinfo" style="font-size:30px"><i class="fas fa-smile"></i><span class="ml-2">CULTURE</span></strong></h2>
    </div>
  </div>
</div>


<div class="center" style="margin:10px 30px 30px 30px">
  <div class="row">
    <div class="col-sm divguide">
        @foreach ($guides as $guide)
            <div class="modalguide">
            <?php if($guide->type == 'food') { ?>

                @auth
                @if(Auth::user()->role == 'admin') 
                <div style="text-align: right;" role="group">
                    <form action="{{route('guides.destroy', ['guide' => $guide->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="editprofile btn btn-link red" type="submit"><i class="fas fa-trash-alt"></i>delete</button>
                    </form>
                    
                    <button class="editprofile btn btn-link" onclick="window.location.href='{{route('guides.edit',['guide'=>$guide->id])}}'">
                    <i class="fas fa-edit"></i>edit 
                    </button>
                </div>
                @endif
                @endauth


                <p style="font-weight:bold" class="fontmodaltitle">{{$guide->title}}</p>
                <p class="fontmodaldetail">{{$guide->detail}}</p>
                <div class="center">
                <img src='/image/{{$guide->picture}}' width="400px"/></div>
            <?php } ?>
            </div>
            @endforeach
    </div>
    <div class="col-sm divguide">
        @foreach ($guides as $guide)
                <div class="modalguide">
                <?php if($guide->type == 'place') { ?>

                    @auth
                    @if(Auth::user()->role == 'admin') 
                    <div style="text-align: right;" role="group">
                        <form action="{{route('guides.destroy', ['guide' => $guide->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="editprofile btn btn-link red" type="submit"><i class="fas fa-trash-alt"></i>delete</button>
                        </form>
                        
                        <button class="editprofile btn btn-link" onclick="window.location.href='{{route('guides.edit',['guide'=>$guide->id])}}'">
                        <i class="fas fa-edit"></i>edit    
                        </button>
                    </div>
                    @endif
                    @endauth


                    <p style="font-weight:bold" class="fontmodaltitle">{{$guide->title}}</p>
                    <p class="fontmodaldetail">{{$guide->detail}}</p>
                    <div class="center">
                    <img src='/image/{{$guide->picture}}' width="400px"/></div>
                <?php } ?>
                </div>
                @endforeach
    </div>
    <div class="col-sm divguide">
        @foreach ($guides as $guide)
                <div class="modalguide">
                <?php if($guide->type == 'culture') { ?>

                    @auth
                    @if(Auth::user()->role == 'admin') 
                    <div style="text-align: right;" role="group">
                        <form action="{{route('guides.destroy', ['guide' => $guide->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="editprofile btn btn-link red" type="submit"><i class="fas fa-trash-alt"></i>delete</button>
                        </form>
                        
                        <button class="editprofile btn btn-link" onclick="window.location.href='{{route('guides.edit',['guide'=>$guide->id])}}'">
                        <i class="fas fa-edit"></i>edit   
                        </button>
                    </div>
                    @endif
                    @endauth


                    <p style="font-weight:bold" class="fontmodaltitle">{{$guide->title}}</p>
                    <p class="fontmodaldetail">{{$guide->detail}}</p>
                    <div class="center">
                    <img src='/image/{{$guide->picture}}' width="400px"/></div>
                <?php } ?>
                </div>
                @endforeach
    </div>
  </div>
</div>
@endsection
