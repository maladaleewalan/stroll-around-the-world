@extends('layouts.home')
@section('content')

<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2"><i class="fas fa-users iconsignup"></i>&nbsp;User
    </div>
    <div style="margin-top:50px;">

    <div class="form-group" style="position: absolute;right:10%">
                    <div class="input-group mb-3" style="width:300px">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Order by</label>
                        </div>
                        <select name="" class="custom-select" onchange="location = this.value;">
                                <option value="{{route('bynewuser')}}">new user</option>  
                                <option value="{{route('users.index')}}">point</option>  
                        </select>
                    </div> 
    </div>

<br><br>
    @foreach( $users as $user ) 
        @if ($user->role != "admin")
        <div class="divusershow">
            <p class="usernamepost"><i class="fas fa-user"></i> <a href="{{route('users.show',['user'=>$user->id])}}">{{$user->name}}</a>
            <?php if( $user->role == "user1") { ?>
                <span style="font-size:20px"><i class="fas fa-star star" style="font-size:20px"></i><br>
                point: {{$user->point}} &nbsp; post: {{$user->totalpost}}</span>
            <?php } else { ?>
                <span style="font-size:20px"><i class="fas fa-star star" style="font-size:20px"></i>&nbsp;<i class="fas fa-star star" style="font-size:20px"></i><br>
                point: {{$user->point}} &nbsp; post: {{$user->totalpost}}</span>
            <?php } ?>
            </p>
        </div>
        @endif
    @endforeach
    </div>
</div>

@endsection