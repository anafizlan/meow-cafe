<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class AdminPortfolioController extends Controller
{
    public function index()
    {
        $portfolioItems = PortfolioItem::all();

        return view('admin.portfolio', compact('portfolioItems'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = PortfolioItem::findOrFail($id);

        $portfolio->update([
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image_url
        ]);

        return back()->with('success', 'Updated');
    }
}