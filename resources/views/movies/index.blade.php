@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<h1>Posts</h1>

<ul>
    @foreach($movies as $movie)
    <li>
        <a href="/movies/{{$movie->id}}"> {{$movie->title}} </a>
    </li>
    <h5>{{$movie->storyline}}</h3>
    @endforeach
</ul>
@endsection