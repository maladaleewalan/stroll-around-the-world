@extends('layouts.home')
@section('content')

<div class="divnewsshow center">
    <b class="newstitleshow">{{$story->title}}</b>
</div>
<div class="divcenter center">
    <img src="{{url('gallery/bangkok-grand-palace.jpg')}}" width="600px" alt="">
</div>
<div class="divcenter">
    <p class="newscontentshow">{{$story->detail}}</p>
    <span>{{$story->created_at}}</span> 
</div>
<div class="divcenter">

<button type="button" onclick="window.location.href='{{route('stories.index')}}'" class="btn btn-success">Back</button>
    <button type="button" class="btn btn-danger floatright">Report</button>
</div>
@endsection
