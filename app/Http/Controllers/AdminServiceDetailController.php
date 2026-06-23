<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
use App\Models\ServiceDetail;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
>>>>>>> Stashed changes

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

<<<<<<< Updated upstream
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
=======
        $service->update([

            'title' => $request->title,
            'short_desc' => $request->short_desc,

            'image' => $request->image,

            'about_title' => $request->about_title,
            'about_desc' => $request->about_desc,

            'features' => $request->features,

            'pricing' => $request->pricing,

        ]);

        return back()->with(
            'success',
            'Service updated successfully!'
        );
    }
}
>>>>>>> Stashed changes
