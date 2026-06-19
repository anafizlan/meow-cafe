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
        'about_title1',
        'about_desc1',
        'about_title2',
        'about_desc2',
        'about_title3',
        'about_desc3',
        'about_title4',
        'about_desc4',
    ];
}
