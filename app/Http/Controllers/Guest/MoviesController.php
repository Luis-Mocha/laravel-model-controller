<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function getMovies() {

        $movies = Movie::All();  //è uguale a " SELECT * FROM `books` "

        return view('pages.movies', compact ('movies'));
    }
}
