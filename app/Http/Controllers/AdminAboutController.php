<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function edit()
    {
        $about = About::first();

        return view('admin.about', compact('about'));
    }

    public function update(Request $request)
    {
        $about = About::first();

        $about->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return back()->with('success', 'About page updated!');
    }
}
