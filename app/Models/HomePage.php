<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $fillable = [
        'why_title_1',
        'why_desc_1',
        'why_title_2',
        'why_desc_2',
        'why_title_3',
        'why_desc_3',
        'why_title_4',
        'why_desc_4',
        'cta_button',
        'feature_title_1',
        'feature_title_2',
        'feature_desc'
    ];
}
