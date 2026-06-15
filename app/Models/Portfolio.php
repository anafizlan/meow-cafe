<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
    'category',
    'title',
    'description',
    'image',
    'cat_category',
    'moment_category',
    'adoption_category',
    'cafe_category'
];
}