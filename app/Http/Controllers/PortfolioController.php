<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioItem;
use App\Models\Footer;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = Portfolio::first();
        $portfolioItems = PortfolioItem::all();
        $footer = Footer::first();

        return view('portfolio', compact('portfolio', 'portfolioItems', 'footer'));
    }

    public function portfolio()
    {
        $portfolioItems = PortfolioItem::all();

        return view('admin.portfolio', compact('portfolioItems'));
    }
}
