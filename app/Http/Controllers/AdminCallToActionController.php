<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CallToAction;

class AdminCallToActionController extends Controller
{
    public function edit()
    {
        $cta = CallToAction::first();

        return view('admin.cta', compact('cta'));
    }

    public function update(Request $request)
    {
        $cta = CallToAction::first();

        $cta->update([
            'title' => $request->title,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'image' => $request->image,
        ]);

        return back()->with(
            'success',
            'CTA updated successfully!'
        );
    }
}