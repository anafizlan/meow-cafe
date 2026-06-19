<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'site_name',
        'about_text',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'address',
        'phone',
        'email'
    ];
}
