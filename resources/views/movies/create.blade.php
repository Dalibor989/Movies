@extends('layouts.app')
@section('title', 'Create movie')
@section('content')
<form method="POST" action="/movies">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" required class="form-control" id="title" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <input name="genre" required class="form-control" id="genre" rows="5" placeholder="Insert genre">
    </div>
    <div class="form-group">
        <label for="release_year">Release year</label>
        <input name="release_year" required class="form-control" id="release_year" rows="5" placeholder="Release year">
    </div>
    <div class="form-group">
        <label for="director">Director</label>
        <input name="director" required class="form-control" id="director" rows="5" placeholder="Release year">
    </div>
    <div class="form-group">
        <label for="storyline">Storyline</label>
        <textarea name="storyline" required class="form-control" id="storyline" rows="5" placeholder="Write your storyline here..."></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection