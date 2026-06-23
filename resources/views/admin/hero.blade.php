@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            🏠 Edit Home Page
        </h1>

        <p class="text-muted mb-0">
            Manage hero section & featured content
        </p>
    </div>

    <a href="{{ url('/home') }}"
       target="_blank"
       class="btn btn-outline-primary">

        <i class="bi bi-box-arrow-up-right"></i>
        View Website

    </a>

</div>

<div class="card shadow-sm border-0 rounded-4">

    <div class="card-body p-4">

        <form action="/admin/hero/update" method="POST">

            @csrf

            {{-- HERO SECTION --}}
            <h3 class="fw-bold mb-4">
                🎬 Hero Section
            </h3>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Title
                        </label>

                        <textarea
                            name="title"
                            class="form-control"
                            rows="4">{{ $hero->title }}</textarea>

                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Image 1
                        </label>

                        <input
                            type="text"
                            name="image1"
                            class="form-control"
                            value="{{ $hero->image1 }}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Button Text
                        </label>

                        <input
                            type="text"
                            name="button_text"
                            class="form-control"
                            value="{{ $hero->button_text }}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Video URL
                        </label>

                        <input
                            type="text"
                            name="video_url"
                            class="form-control"
                            value="{{ $hero->video_url }}">

                    </div>

                    <div class="mb-0">
                        <label class="form-label fw-semibold">
                            Image 2
                        </label>

                        <input
                            type="text"
                            name="image2"
                            class="form-control"
                            value="{{ $hero->image2 }}">

                    </div>

                </div>

            </div>

            {{-- WHY US SECTION --}}
            <h3 class="fw-bold mb-4">
                ⭐ Why Us Section
            </h3>

            @for($i = 1; $i <= 4; $i++)

                <div class="card border-0 shadow-sm rounded-4 mb-4">

                    <div class="card-body">

                        <h5 class="fw-bold mb-4">
                            Slide {{ $i }}
                        </h5>

                        <div class="mb-3">

                            <label class="form-label">
                                Title
                            </label>

                            <input
                                type="text"
                                name="why_title_{{ $i }}"
                                class="form-control"
                                value="{{ $whyUs->{'slide'.$i.'_title'} }}">

                        </div>

                        <div class="mb-0">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea
                                name="why_desc_{{ $i }}"
                                class="form-control"
                                rows="4">{{ $whyUs->{'slide'.$i.'_description'} }}</textarea>

                        </div>

                    </div>

                </div>

            @endfor

            {{-- RECENT BLOGS --}}
            <h3 class="fw-bold mb-4">
                📰 Recent Blogs
            </h3>

            @for($i = 1; $i <= 4; $i++)

                <div class="card border-0 shadow-sm rounded-4 mb-4">

                    <div class="card-body">

                        <h5 class="fw-bold mb-4">
                            Blog {{ $i }}
                        </h5>

                        <div class="mb-3">

                            <label class="form-label">
                                Image
                            </label>

                            <input
                                type="text"
                                name="recent_blog{{ $i }}"
                                class="form-control"
                                value="{{ $hero->{'recent_blog'.$i} }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Date
                            </label>

                            <input
                                type="text"
                                name="rb_date{{ $i }}"
                                class="form-control"
                                value="{{ $hero->{'rb_date'.$i} }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Author Name
                            </label>

                            <input
                                type="text"
                                name="rb_name{{ $i }}"
                                class="form-control"
                                value="{{ $hero->{'rb_name'.$i} }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Blog Title
                            </label>

                            <input
                                type="text"
                                name="rb_title{{ $i }}"
                                class="form-control"
                                value="{{ $hero->{'rb_title'.$i} }}">

                        </div>

                        <div class="mb-0">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea
                                name="rb_desc{{ $i }}"
                                class="form-control"
                                rows="3">{{ $hero->{'rb_desc'.$i} }}</textarea>

                        </div>

                    </div>

                </div>

            @endfor

            <button class="btn btn-primary btn-lg px-5 rounded-3">

                <i class="bi bi-check-circle"></i>
                Save Changes

            </button>

        </form>

    </div>

</div>

@endsection
