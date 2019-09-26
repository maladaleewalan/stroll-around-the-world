@extends('layouts.master')
@section('content')
<p> {{ $post->id }} </p>
    <h1> {{ $post->title }} </h1>
    <p> {{ $post->detail }} </p>
@endsection