@extends('layouts.app')

@section('title', 'Add movie')

@section('content')
<form method="POST" action="/movies" class="container-fluid">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="genre">Genre</label>
    <input type="text" name="genre" class="form-control" id="genre" placeholder="Enter genre">
  </div>
  <div class="form-group">
    <label for="director">Director</label>
    <input type="text" name="director" class="form-control" id="director" placeholder="Enter director">
  </div>
  <div class="form-group">
    <label for="release_year">Release year</label>
    <input type="text" name="release_year" class="form-control" id="release_year" placeholder="Enter release year">
  </div>
  <div class="form-group">
    <label for="storyline">Storyline</label>
    <textarea type="text" name="storyline" class="form-control" id="storyline" placeholder="Example input"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection