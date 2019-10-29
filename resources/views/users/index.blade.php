@extends('layouts.home')
@section('content')

<div class="center">
    <div class="divsignup">
        <span class="titlepage center mr-2"><i class="fas fa-users iconsignup"></i>&nbsp;User
    </div>
    <div style="margin-top:50px;">
    @foreach( $users as $user ) 
        @if ($user->role != "admin")
        <div class="divusershow" >
            <p class="usernamepost"><i class="fas fa-user"></i> <a href="{{route('users.show',['user'=>$user->id])}}">{{$user->name}}</a>
            <?php if( $user->role == "user1") { ?>
                <span><i class="fas fa-star star" style="font-size:30px"></i>&nbsp;
                point: {{$user->point}} &nbsp; post: {{$user->totalpost}}</span>
            <?php } else { ?>
                <span><i class="fas fa-star star" style="font-size:30px"></i>&nbsp;<i class="fas fa-star star" style="font-size:30px"></i>&nbsp;
                point: {{$user->point}} &nbsp; post: {{$user->totalpost}}</span>
            <?php } ?>
            </p>
        </div>
        @endif
    @endforeach
    </div>
</div>

@endsection