<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class AdminFooterController extends Controller
{
    public function edit()
    {
        $footer = Footer::first();

        return view('admin.footer', compact('footer'));
    }

    public function update(Request $request)
    {
        $footer = Footer::first();

        $footer->update($request->all());

        return back()->with(
            'success',
            'Footer updated successfully!'
        );
    }
}