<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Function_;

class PageController extends Controller
{
    public function index()
    {
        $movies = ['autore' => 'autore1'];
        return view('home', compact('movies'));
    }
}