@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h1>{{$movie->title }}</h1>
<div>
    <p>Director: <strong>{{$movie->director}}</strong>    Released: <strong>{{$movie->release_year}}</strong> Genre: <strong><a href="/genres/{{$movie->genre}}">{{$movie->genre}}</a></strong></p>
    <p>{{$movie->storyline}}</p>
    @foreach($movie->comments as $comment)
    <p>{{$comment->content}} </br>
        posted at: {{$comment->created_at}}
    </p>
    @endforeach

    <form method="POST" action="/movies/{{$movie->id}}/comments">
    @csrf
    <div class="form-group">
        <label for="content">Comment</label>
        <textarea name="content" class="form-control" id="content" rows="3" placeholder="Write your comment here..."></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection