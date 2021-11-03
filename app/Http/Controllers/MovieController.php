<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $dati = Movie::all();

        var_dump($dati);

        return view('home');
    }
}
