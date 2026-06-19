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

    $image1 = $about->image1;

    if ($request->hasFile('image1')) {
        $image = $request->file('image1');
        $image1 = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('assets/img'), $image1);
    }

    $about->update([
        'bullet1' => $request->bullet1,
        'image1' => $image1,
        'bullet2' => $request->bullet2,
         'bullet3' => $request->bullet3,
         'image2' => $request->image2,
            'about_title1' => $request->about_title1,
            'about_desc1' => $request->about_desc1,
            'about_title2' => $request->about_title2,
            'about_desc2' => $request->about_desc2,
            'about_title3' => $request->about_title3,
            'about_desc3' => $request->about_desc3,
            'about_title4' => $request->about_title4,
            'about_desc4' => $request->about_desc4,
    ]);

    return back()->with('success', 'Updated successfully');
}

   
}