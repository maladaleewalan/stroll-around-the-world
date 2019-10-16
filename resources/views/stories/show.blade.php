@extends('layouts.home')
@section('content')

<div style="text-align: right;margin:80px 370px 0px 0px;" role="group">
    <form action="{{route('stories.destroy', ['story' => $story->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button class="editprofile btn btn-link red" type="submit"><i class="fas fa-trash-alt"></i>delete</button>
    </form>
    <button class="editprofile btn btn-link" onclick="window.location.href='{{route('stories.edit',['story'=>$story->id])}}'">
        <i class="fas fa-edit"></i>edit
    </button>

</div>

<div class="divnewsshow center">
    
    <p class="newstitleshow">{{$story->title}}</p>
</div>
<div class="divcenter center">
    
    <img src="/image/{{$story->picture}}" width="800px"> 
</div>
<div class="divcenter">
    <p class="newscontentshow">{{$story->detail}}</p>
</div>
<div class="divcenter">
    <span><i class="far fa-clock"></i> {{$story->created_at}}</span> 
</div>
<div class="divcenter">

<button type="button" onclick="window.location.href='{{route('stories.index')}}'" class="btn btn-success buttonsignup">Back</button>
<button type="button" class="btn btn-danger buttonsignup floatright">Report</button>
   
</div>

@endsection
