<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        // $movies = Movie::all();

        // Filtro movie con voto solo maggiore di 8.5
        $movies = Movie::where('vote', '>', 8.5)->get();
        return view('movies', compact('movies'));
    }
}
