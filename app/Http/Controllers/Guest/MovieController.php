<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function home()
    {
        $data = [
            'movies' => Movie::all()
        ];
        return view('home', $data);
    }
}
