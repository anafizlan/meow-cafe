<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Footer;
use App\Models\Team;
use App\Models\CallToAction;

class AboutController extends Controller
{
    public function index()
{
    $about = About::first();
    $team = Team::first();
    $footer = Footer::first();
    $cta = CallToAction::first();

    return view('about', compact(
        'about',
        'team',
        'footer',
        'cta'
    ));
}
}