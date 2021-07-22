<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GenreController extends Controller
{
    public function index($genre)
    {
        $movies = Movie::where('genre', $genre)->get();

        return view('movies.index', compact('movies'));
    }
}
