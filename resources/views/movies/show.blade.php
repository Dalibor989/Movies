@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h1>{{$movie->title }}</h1>
<div>
    <p>{{$movie->storyline}}</p>
    <p>Director: <strong>{{$movie->director}}</strong>    Released: <strong>{{$movie->release_year}}</strong> Genre: <strong>{{$movie->genre}}</strong></p>
</div>
@endsection