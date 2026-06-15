<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'description',
        'bullet1',
        'bullet2',
        'bullet3',
        'image1',
        'image2',
    ];
}
