<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller {
    function index () {
        return view('home', ['data'=>Movie::all()]);
    }
};

