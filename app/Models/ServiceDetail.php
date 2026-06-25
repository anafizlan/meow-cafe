<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{

    protected $table = 'service_details';

    protected $fillable = [


        'slug',
        'title',
        'short_desc',
        'image',
        'about_title',
        'about_desc',
        'features',
        'pricing',

    ];
}


   

