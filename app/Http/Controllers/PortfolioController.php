<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioItem;

class PortfolioController extends Controller
{

public function index()
{
    $portfolio = Portfolio::first();

    $portfolioItems = PortfolioItem::all();

    return view('portfolio', compact(
        'portfolio',
        'portfolioItems'
    ));
}


   public function portfolio()
{
    $portfolioItems = PortfolioItem::all();

    return view('admin.portfolio', compact('portfolioItems'));
}
}
