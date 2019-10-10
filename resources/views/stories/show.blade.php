@extends('layouts.home')
@section('content')

<div style="text-align: right;margin:80px 370px 0px 0px;" role="group">
    <form action="{{route('stories.destroy', ['story' => $story->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button class="editprofile btn btn-link red" type="submit"><i class="fas fa-trash-alt"></i>delete</button>
    </form>
    <button class="editprofile btn btn-link" onclick="document.getElementById('id03').style.display='block'">
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

<button type="button" onclick="window.location.href='{{route('stories.index')}}'" class="btn btn-success">Back</button>
    <button type="button" class="btn btn-danger floatright">Report</button>

   
</div>





<div id="id03" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background-color:#F2D7D5">
            <form class="w3-container" action="{{route('stories.update',['story'=>$story->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w3-section">
                    <b>Title<label class="nav-item dropdown" ></b>
                    <input type="text" name="title"  class="form-control @error('title') is-invalid @enderror" value="{{old('title',$story->title)}}">
                    @error('title')
                    <div class="red">{{$message}}</div>
                    @enderror

                    <br>
                    <b>Description<label class="nav-item dropdown" ></b>
                    <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" rows="10">{{old('detail',$story->detail)}}</textarea>
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
@endsection
