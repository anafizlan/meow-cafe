<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class AdminHeroController extends Controller
{
    public function edit()
    {
        $hero = Hero::first();

        return view('admin.hero', compact('hero'));
    }

    public function update(Request $request)
    {
        $hero = Hero::first();

        $hero->update([
            'title' => $request->title,
            'button_text' => $request->button_text,
            'video_url' => $request->video_url,
        ]);

        return back()->with('success', 'Hero updated successfully!');
    }
}