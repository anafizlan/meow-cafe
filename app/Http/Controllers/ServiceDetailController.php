<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetail;
use App\Models\Footer;

class ServiceDetailController extends Controller
{
    public function show($slug)
    {
        $service = ServiceDetail::where(
            'slug',
            $slug
        )->firstOrFail();

        $footer = Footer::first();

        return view(
            'service-detail',
            compact(
                'service',
                'footer'
            )
        );
    }
}