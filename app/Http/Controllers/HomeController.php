<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Footer;
use App\Models\WhyUs;
use App\Models\Service;
use App\Models\CallToAction;

class HomeController extends Controller
{
    public function index()
{
    $hero = Hero::first();
    $footer = Footer::first();
    $whyUs = WhyUs::first();
    $service = Service::first();
    $cta = CallToAction::first();

    return view('home', compact(
        'hero',
        'footer',
        'whyUs',
        'service',
        'cta'
    ));
}
}