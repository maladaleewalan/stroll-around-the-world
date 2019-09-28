@extends('layouts.welcome')

@section('content')
<div class="center">
<p class="textwelcome"> Stroll around the World </p>
</div>
<div class="center buttonwelcome">
<button type="button" class="btn btn-light button-welcome"><a href="{{action('HomeController@first')}}">go to website</a></button>

</div>


@endsection