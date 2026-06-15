@extends('admin.layout')

@section('content')

<div class="mb-3">
    <h1 class="mb-4">
    Edit Home Page
</h1>

    <a href="{{ url('/home') }}" target="_blank" class="btn btn-primary">
        🌐 View Website
    </a>
</div>


<div class="card p-4">

    <form action="/admin/hero/update" method="POST">
        @csrf

        <div class="mb-3">
            <label>Hero Title</label>

            <textarea
                name="title"
                class="form-control"
                rows="4">{{ $hero->title }}</textarea>
        </div>

        <div class="mb-3">
            <label>Button Text</label>

            <input
                type="text"
                name="button_text"
                class="form-control"
                value="{{ $hero->button_text }}">
        </div>

        <div class="mb-3">
            <label>Video URL</label>

            <input
                type="text"
                name="video_url"
                class="form-control"
                value="{{ $hero->video_url }}">
        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>

@endsection