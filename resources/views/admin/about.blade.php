@extends('admin.layout')

@section('content')
    <div class="mb-3">
        <h1 class="mb-4">
            Edit About Page
        </h1>

        <a href="{{ url('/home') }}" target="_blank" class="btn btn-primary">
            🌐 View Website
        </a>
    </div>
    <div class="card p-4">

        <form action="/admin/about/update" method="POST">
            @csrf

            <div class="mb-3">
                <label>Image 1</label>

                <input type="text" name="image1" class="form-control" value="{{ $about->image1 }}">
            </div>

            <div class="mb-3">
                <label>About Title</label>

                <input type="text" name="title" class="form-control" value="{{ $about->title }}">
            </div>

            <div class="mb-3">
                <label>Description</label>

                <textarea name="description" rows="8" class="form-control">{{ $about->description }}</textarea>
            </div>

            <div class="mb-3">
                <label>Bullet 1</label>
                <input type="text" name="bullet1" class="form-control" value="{{ $about->bullet1 }}">
            </div>

            <div class="mb-3">
                <label>Bullet 2</label>
                <input type="text" name="bullet2" class="form-control" value="{{ $about->bullet2 }}">
            </div>

            <div class="mb-3">
                <label>Bullet 3</label>
                <input type="text" name="bullet3" class="form-control" value="{{ $about->bullet3 }}">
            </div>

            <div class="mb-3">
                <label>Image 2</label>

                <input type="text" name="image2" class="form-control" value="{{ $about->image2 }}">
            </div>

            <div class="mb-3">
                <label>About Title 1</label>

                <input type="text" name="about_title1" class="form-control" value="{{ $about->about_title1 }}">
            </div>

            <div class="mb-3">
                <label>About Description 1</label>

                <textarea name="about_desc1" rows="4" class="form-control">{{ $about->about_desc1 }}</textarea>
            </div>

            <div class="mb-3">
                <label>About Title 2</label>

                <input type="text" name="about_title2" class="form-control" value="{{ $about->about_title2 }}">
            </div>

            <div class="mb-3">
                <label>About Description 2</label>

                <textarea name="about_desc2" rows="4" class="form-control">{{ $about->about_desc2 }}</textarea>
            </div>

            <div class="mb-3">
                <label>About Title 3</label>

                <input type="text" name="about_title3" class="form-control" value="{{ $about->about_title3 }}">
            </div>

            <div class="mb-3">
                <label>About Description 3</label>

                <textarea name="about_desc3" rows="4" class="form-control">{{ $about->about_desc3 }}</textarea>
            </div>

            <div class="mb-3">
                <label>About Title 4</label>

                <input type="text" name="about_title4" class="form-control" value="{{ $about->about_title4 }}">
            </div>

            <div class="mb-3">
                <label>About Description 4</label>

                <textarea name="about_desc4" rows="4" class="form-control">{{ $about->about_desc4 }}</textarea>
            </div>

            <button class="btn btn-primary">
                Save Changes
            </button>

        </form>

    </div>
@endsection
