<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Footer;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    public function edit()
    {
        $service = Service::first();
        $footer = Footer::first();

        return view('admin.services', compact(
            'service',
            'footer'
        ));
    }

    public function update(Request $request)
    {
        $service = Service::first();

        $service->update($request->all());

        return back()->with(
            'success',
            'Services page updated successfully!'
        );
    }
}