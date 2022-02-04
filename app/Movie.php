<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('home',compact('movies'));
    }
}
