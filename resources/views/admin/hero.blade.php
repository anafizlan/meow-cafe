@extends('admin.layout') @section('content')
    <div class="mb-3">
        <h1 class="mb-4"> Edit Home Page </h1> <a href="{{ url('/home') }}" target="_blank" class="btn btn-primary"> 🌐 View Website </a>
    </div>
    <div class="card p-4">
        <form action="/admin/hero/update" method="POST"> @csrf <div class="mb-3"> <label>Title</label>
                <textarea name="title" class="form-control" rows="4">{{ $hero->title }}</textarea>
            </div>
            <input type="text" name="image1" class="form-control mb-4" value="{{ $hero->image1 }}">

            <div class="mb-3"> <label>Button Text</label> <input type="text" name="button_text" class="form-control" value="{{ $hero->button_text }}"> </div>
            <div class="mb-3"> <label>Video URL</label> <input type="text" name="video_url" class="form-control" value="{{ $hero->video_url }}"> </div>
            <input type="text" name="image2" class="form-control mb-4" value="{{ $hero->image2 }}">

            <div class="mb-3"> <label>Why Us Title 1</label> <input type="text" name="why_title_1" class="form-control" value="{{ $whyUs->slide1_title }}"> </div>
            <div class="mb-3"> <label>Why Us Description 1</label>
                <textarea name="why_desc_1" class="form-control" rows="4">{{ $whyUs->slide1_description }}</textarea>
            </div>
            <div class="mb-3"> <label>Why Us Title 2</label> <input type="text" name="why_title_2" class="form-control" value="{{ $whyUs->slide2_title }}"> </div>
            <div class="mb-3"> <label>Why Us Description 2</label>
                <textarea name="why_desc_2" class="form-control" rows="4">{{ $whyUs->slide2_description }}</textarea>
            </div>
            <div class="mb-3"> <label>Why Us Title 3</label> <input type="text" name="why_title_3" class="form-control" value="{{ $whyUs->slide3_title }}"> </div>
            <div class="mb-3"> <label>Why Us Description 3</label>
                <textarea name="why_desc_3" class="form-control" rows="4">{{ $whyUs->slide3_description }}</textarea>
            </div>
            <div class="mb-3"> <label>Why Us Title 4</label> <input type="text" name="why_title_4" class="form-control" value="{{ $whyUs->slide4_title }}"> </div>
            <div class="mb-3"> <label>Why Us Description 4</label>
                <textarea name="why_desc_4" class="form-control" rows="4">{{ $whyUs->slide4_description }}</textarea>
            </div>
            
            <div class="mb-3"> <label>Recent Blog 1</label>
                <input type="text" name="recent_blog1" class="form-control mb-4" value="{{ $hero->recent_blog1 }}">
                <input type="text" name="rb_date1" class="form-control mb-4" value="{{ $hero->rb_date1 }}">
                <input type="text" name="rb_name1" class="form-control mb-4" value="{{ $hero->rb_name1 }}">
                <input type="text" name="rb_title1" class="form-control mb-4" value="{{ $hero->rb_title1 }}">
                <input type="text" name="rb_desc1" class="form-control mb-4" value="{{ $hero->rb_desc1 }}">
            </div>



                <div class="mb-3"> <label>Recent Blog 2</label>
                    <input type="text" name="recent_blog2" class="form-control mb-4" value="{{ $hero->recent_blog2 }}">
                    <input type="text" name="rb_date2" class="form-control mb-4" value="{{ $hero->rb_date2 }}">
                    <input type="text" name="rb_name2" class="form-control mb-4" value="{{ $hero->rb_name2 }}">
                    <input type="text" name="rb_title2" class="form-control mb-4" value="{{ $hero->rb_title2 }}">
                    <input type="text" name="rb_desc2" class="form-control mb-4" value="{{ $hero->rb_desc2 }}">
                </div>

                    <div class="mb-3"> <label>Recent Blog 3</label>
                        <input type="text" name="recent_blog3" class="form-control mb-4" value="{{ $hero->recent_blog3 }}">
                        <input type="text" name="rb_date3" class="form-control mb-4" value="{{ $hero->rb_date3 }}">
                        <input type="text" name="rb_name3" class="form-control mb-4" value="{{ $hero->rb_name3 }}">
                        <input type="text" name="rb_title3" class="form-control mb-4" value="{{ $hero->rb_title3 }}">
                        <input type="text" name="rb_desc3" class="form-control mb-4" value="{{ $hero->rb_desc3 }}">
                        </div>


                        <div class="mb-3"> <label>Recent Blog 4</label>
                            <input type="text" name="recent_blog4" class="form-control mb-4" value="{{ $hero->recent_blog4 }}">
                            <input type="text" name="rb_date4" class="form-control mb-4" value="{{ $hero->rb_date4 }}">
                            <input type="text" name="rb_name4" class="form-control mb-4" value="{{ $hero->rb_name4 }}">
                            <input type="text" name="rb_title4" class="form-control mb-4" value="{{ $hero->rb_title4 }}">
                            <input type="text" name="rb_desc4" class="form-control mb-4" value="{{ $hero->rb_desc4 }}">
                            </div>


                        </div> <button class="btn btn-primary"> Save Changes </button>
        </form>
    </div>
@endsection
