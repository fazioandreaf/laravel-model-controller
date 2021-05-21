<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class controller_movies extends Controller
{
    public function movies(){
        $movies= Film::all();
        dd($movies);
        // return view('pages.homepage',compact($movies));
    }
}
