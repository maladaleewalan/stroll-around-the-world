@extends('layouts.home')

@section('content')

<div class="titlepage mt-2 ml-3">GALLERY
    <i class="fas fa-globe-americas america ml-2" style="font-size:50px"></i>

    <a class="dropdown choosecountry" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><i class="fas fa-mouse-pointer"></i>&nbsp;Choose Country</span></a>
    <div class="dropdown-menu ">
        @foreach ($countries as $country)
          <a class="dropdown-item titlenav" href="{{route('posts.indexPostsCountry',['id'=>$country->id])}}">{{$country->name}}</a>
        @endforeach
    </div>
</div>

  @auth
  <button onclick="window.location.href='{{route('posts.create')}}'" class="button ml-5"><span>POST</span></button>
  @endauth

<div class="center">
  @foreach($posts as $post)
  <div class="divgallery">
  <p class="usernamepost"><i class="fas fa-user"></i> <a href="{{route('users.show',['user'=>$post->user->id])}}">{{$post->user->name}}</a></p>
    <!-- <p>{{$post->detail}}</p> -->

    <a href="{{route('posts.show' , ['post' => $post->id]) }}"><img class="shadow" src="/image/{{$post->picture}}" width="100%"></a>
    <br> <b class="newstitle showcountryname" ><i class="fas fa-map-marker-alt iconshowcountryname"></i>&nbsp;{{$post->country->name}}</b>
    <div class="like">
      @auth
      @php
        $isLiked = 0;
      @endphp
        @if($postlikes != null)
                @foreach($postlikes as $eachPostLike)
                    @if ($post->id == $eachPostLike->post_id)
                        @php
                            $isLiked = 1;
                        @endphp
                    @endif
                @endforeach
        @endif


      @if ($isLiked == 0)
        <a class="fa fa-heart iconlike" href="{{route('posts.userlike' , ['id' => $post->id]) }}"></a>
      @else
        <a class="fa fa-heart iconlike" style="color: #000000;" href="{{route('posts.userunlike' , ['id' => $post->id]) }}"></a>
      @endif

      @endauth
      <span class="titlenav" style="font-size:20px">Likes : {{$post->totallike}}</span>
    </div>
  </div>
  @endforeach

    <button class="btn btn-success" id="click_api">Test Api</button>
  </div>



@endsection


@section('script')
    <script>


    </script>
@endsection
