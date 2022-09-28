<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//* Importo, con il comando use, il Model che interagisce col database.
use App\Movie;

class PageController extends Controller
{
    public function index() {

        //* Ottengo tutte le informazioni sui film dal database:
        $movies = Movie::where('vote', '>=', '9')->get();

        //* Ritorno la vista + la Collection.
        return view('homePage', ['movies' => $movies]);
    }

    public function loadMore() {
        $moreMovies = Movie::all();

        return view('loadMore', ['movies' => $moreMovies]);
    }
}