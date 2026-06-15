<?php

namespace App\Http\Controllers;

use App\Models\Hero;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();

        return view('home', compact('hero'));
    }
}