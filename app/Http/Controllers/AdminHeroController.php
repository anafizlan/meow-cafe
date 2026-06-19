<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\HomePage; // tambah ni
use App\Models\WhyUs;

class AdminHeroController extends Controller
{
    public function update(Request $request)
{
    $hero = Hero::first();

    $hero->update([
    'title' => $request->title,
    'button_text' => $request->button_text,
    'video_url' => $request->video_url,
    'image1' => $request->image1,
    'image2' => $request->image2,
    'image3' => $request->image3,
    'recent_blog1' => $request->recent_blog1,
    'recent_blog2' => $request->recent_blog2,
    'recent_blog3' => $request->recent_blog3,
    'recent_blog4' => $request->recent_blog4,
    'rb_date1' => $request->rb_date1,
    'rb_date2' => $request->rb_date2,
    'rb_date3' => $request->rb_date3,
    'rb_date4' => $request->rb_date4,
    'rb_name1' => $request->rb_name1,
    'rb_name2' => $request->rb_name2,
    'rb_name3' => $request->rb_name3,
    'rb_name4' => $request->rb_name4,
    'rb_title1' => $request->rb_title1,
    'rb_title2' => $request->rb_title2,
    'rb_title3' => $request->rb_title3,
    'rb_title4' => $request->rb_title4,
    'rb_desc1' => $request->rb_desc1,
    'rb_desc2' => $request->rb_desc2,
    'rb_desc3' => $request->rb_desc3,
    'rb_desc4' => $request->rb_desc4,
]);

    $whyUs = WhyUs::first();

    $whyUs->update([
        'slide1_title' => $request->why_title_1,
        'slide1_description' => $request->why_desc_1,

        'slide2_title' => $request->why_title_2,
        'slide2_description' => $request->why_desc_2,

        'slide3_title' => $request->why_title_3,
        'slide3_description' => $request->why_desc_3,

        'slide4_title' => $request->why_title_4,
        'slide4_description' => $request->why_desc_4,
    ]);

    return back()->with(
        'success',
        'Home page updated successfully!'
    );
}




    public function edit()
{
    $hero = Hero::first();
    $whyUs = WhyUs::first();

    return view('admin.hero', compact(
        'hero',
        'whyUs'
    ));
}

}