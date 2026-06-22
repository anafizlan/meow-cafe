<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class AdminServiceDetailController extends Controller
{
    public function index()
    {
        $services = ServiceDetail::all();

        return view(
            'admin.service-detail',
            compact('services')
        );
    }

    public function update(Request $request, $id)
    {
        $service = ServiceDetail::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_desc' => 'required|string',
            'image' => 'required|string',
            'about_title' => 'required|string|max:255',
            'about_desc' => 'required|string',
            'features' => 'required|string',
            'pricing' => 'required|string',
        ]);

        $service->update($validated);

        return redirect()->back()->with(
            'success',
            'Service details updated successfully!'
        );
    }
}
