<?php

namespace App\Http\Controllers;

use App\Models\Filem;

class FilemController extends Controller
{
    public function index()
    {
        $movies = Filem::all();
        return view('movies.index', compact('movies'));
    }
}