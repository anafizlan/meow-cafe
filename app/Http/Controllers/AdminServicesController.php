<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    public function edit()
    {
        $service = Service::first();

        return view('admin.services', compact('service'));
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