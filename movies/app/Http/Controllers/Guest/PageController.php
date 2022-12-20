<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $movies = Movie::all();
        // $movies = Movie::limit(3)->get();
        $movies = Movie::select('id', 'title', 'image')
            ->limit(3)
            ->get()
        ;


        // dd($movies);
        return view('home', compact('movies'));
    }
}