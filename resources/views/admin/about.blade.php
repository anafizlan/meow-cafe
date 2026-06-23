@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            📝 Edit About Page
        </h1>

        <p class="text-muted mb-0">
            Manage your about section content
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

        <form action="/admin/about/update" method="POST">
            @csrf

            {{-- SECTION 1 --}}
            <h3 class="fw-bold mb-4">
                📸 Main Section
            </h3>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Image 1
                        </label>

                        <input
                            type="text"
                            name="image1"
                            class="form-control"
                            value="{{ $about->image1 }}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Title
                        </label>

                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            value="{{ $about->title }}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Description
                        </label>

                        <textarea
                            name="description"
                            rows="8"
                            class="form-control">{{ $about->description }}</textarea>

                    </div>

                </div>

            </div>

            {{-- BULLET POINTS --}}
            <h3 class="fw-bold mb-4">
                ✨ Bullet Points
            </h3>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">
                            Bullet 1
                        </label>

                        <input
                            type="text"
                            name="bullet1"
                            class="form-control"
                            value="{{ $about->bullet1 }}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Bullet 2
                        </label>

                        <input
                            type="text"
                            name="bullet2"
                            class="form-control"
                            value="{{ $about->bullet2 }}">

                    </div>

                    <div class="mb-0">
                        <label class="form-label">
                            Bullet 3
                        </label>

                        <input
                            type="text"
                            name="bullet3"
                            class="form-control"
                            value="{{ $about->bullet3 }}">

                    </div>

                </div>

            </div>

            {{-- ADDITIONAL SECTIONS --}}
            <h3 class="fw-bold mb-4">
                📚 Additional Sections
            </h3>

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Image 2
                </label>

                <input
                    type="text"
                    name="image2"
                    class="form-control"
                    value="{{ $about->image2 }}">

            </div>

            @for($i = 1; $i <= 4; $i++)

                <div class="card border-0 shadow-sm rounded-4 mb-4">

                    <div class="card-body">

                        <h5 class="fw-bold mb-4">
                            Section {{ $i }}
                        </h5>

                        <div class="mb-3">

                            <label class="form-label">
                                Title
                            </label>

                            <input
                                type="text"
                                name="about_title{{ $i }}"
                                class="form-control"
                                value="{{ $about->{'about_title'.$i} }}">

                        </div>

                        <div class="mb-0">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea
                                name="about_desc{{ $i }}"
                                rows="4"
                                class="form-control">{{ $about->{'about_desc'.$i} }}</textarea>

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
