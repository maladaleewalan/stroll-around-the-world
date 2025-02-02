@extends('layouts.home')
@section('content')

@auth
@if(Auth::id() === $story->user->id ) 
<div style="text-align: right;margin:80px 370px 0px 0px;" role="group">
    <form action="{{route('stories.destroy', ['story' => $story->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Are You Sure to delete this?')" class="editprofile btn btn-link red" style="font-size:20px;" type="submit"><i class="fas fa-trash-alt"></i>delete</button>
    </form>
    <button class="editprofile btn btn-link" style="font-size:20px;" onclick="window.location.href='{{route('stories.edit',['story'=>$story->id])}}'">
        <i class="fas fa-edit"></i>edit
    </button>
</div>
@endif
@endauth

<div class="divnewsshow center" >
    <p class="newstitleshow">{{$story->title}}</p>
</div>
<div class="divcenter center">
    
    <img  class="shadow" src="/image/{{$story->picture}}" width="900px"> 
</div>
<div class="divcenter">
    <p class="newscontentshow">{{$story->detail}}</p>
</div>
<div class="divcenter">
<b class="newstitle showcountryname" ><i class="fas fa-map-marker-alt iconshowcountryname"></i>&nbsp;{{$story->country->name}}</b>   <br>
    <span style="font-size:20px">Post by:&nbsp;<a href="{{route('users.show', ['user'=>$story->user->id])}}">{{$story->user->name}}</a></span><br>
    <span><i class="far fa-clock"></i> {{$story->created_at}}</span> 
</div>
<div class="divcenter">

<button type="button" onclick="window.location.href='{{route('stories.index')}}'" class="btn btn-success buttonsignup">Back</button>

</div>

@endsection
