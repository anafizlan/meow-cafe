<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Footer;

class ServicesController extends Controller
{
    public function index()
    {
        $service = Service::first();
        $footer = Footer::first();

        return view('services', compact(
            'service',
            'footer'
        ));
    }
}