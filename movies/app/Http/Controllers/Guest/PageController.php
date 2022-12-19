<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Function_;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        dd($movies);
        return view('home');
    }
}