<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $table = 'portfolio_items';

    protected $fillable = [
        'category',
        'title',
        'description',
        'image'
    ];
}