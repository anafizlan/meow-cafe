<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyUs extends Model
{
    protected $table = 'why_us';

    protected $fillable = [
        'image',
        'slide1_title',
        'slide1_description',
        'slide2_title',
        'slide2_description',
        'slide3_title',
        'slide3_description',
        'slide4_title',
        'slide4_description'
    ];
}