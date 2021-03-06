<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        // dd($movies);

        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        var_dump($id);

        return view('movies.show', ['id' => $id]);
    }
}
