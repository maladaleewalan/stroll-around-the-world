@extends('layouts.home')

@section('content')
    <p> {{ date('j M Y H:i:s') }}</p>
    <h1> index blade ja </h1>

    @foreach ($posts as $p)
    <div class="card">
            <p> {{ $p->id }} </p>
            <p> {{ $p->title }} </p>
            <p> {{ $p->detail }} </p>

            <p> URL: {{ url('posts/' . $p->id)}} </p>
            <p> Action: {{ action('PostsController@show',['id'=> $p->id]) }}</p>
            <p> ROUTE NAME: {{ route('posts.show',['id'=>$p->id]) }}</p>

            <a href="{{ action('PostsController@show',['id'=> $p->id]) }}">readmore</a>


    </div>
    @endforeach
    <p> All Posts: {{ action('PostsController@index') }}
@endsection