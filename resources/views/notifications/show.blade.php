@extends('layouts.home')

@section('content')
<div class="titlepage mt-2 ml-3">Notifications 
  <i class="fas fa-bell yellow ml-2" style="font-size:50px;text-shadow:2px 2px black"></i>

</div>

@if($notifications->first() == null)
    <div class="divcenter divnoti">
        <p class="news" style="font-weight:bold">ไม่มีการแจ้งเตือน</p>
    </div>
@endif

@foreach ($notifications as $notification)

<div class="divcenter divnoti">
    <p class="news" style="font-weight:bold">{{$notification->detail}}</p>
</div>

@endforeach 

 
    
@endsection