<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    function index(){
        $comic = Comic::all();
        return view("comic", compact('comics'));
    }
}
