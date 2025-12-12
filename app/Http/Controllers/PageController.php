<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }

    public function apropos()
    {
        return view('apropos');
    }
}
