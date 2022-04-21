<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        abort_if(!isset($movies), 404);

        return view('home', compact('movies'));
    }
}
