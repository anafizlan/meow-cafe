@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            🐾 Edit Services Page
        </h1>

        <p class="text-muted mb-0">
            Manage all services & testimonials
        </p>
    </div>

    <a href="{{ url('/services') }}"
       target="_blank"
       class="btn btn-outline-primary">

        <i class="bi bi-box-arrow-up-right"></i>
        View Website

    </a>

</div>

<div class="card shadow-sm border-0 rounded-4">

    <div class="card-body p-4">

        <form action="/admin/services/update" method="POST">
            @csrf

            {{-- SECTION TITLE --}}
            <div class="mb-5">

                <label class="form-label fw-semibold">
                    Section Title
                </label>

                <input
                    type="text"
                    name="section_title"
                    class="form-control"
                    value="{{ $service->section_title }}">

            </div>

            {{-- SERVICES --}}
            <h3 class="fw-bold mb-4">
                🐱 Services
            </h3>

            @for($i = 1; $i <= 6; $i++)

                <div class="card border-0 shadow-sm rounded-4 mb-4">

                    <div class="card-body">

                        <h5 class="fw-bold mb-4">
                            Service {{ $i }}
                        </h5>

                        <div class="mb-3">

                            <label class="form-label">
                                Title
                            </label>

                            <input
                                type="text"
                                name="service{{ $i }}_title"
                                class="form-control"
                                value="{{ $service->{'service'.$i.'_title'} }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea
                                name="service{{ $i }}_desc"
                                rows="3"
                                class="form-control">{{ $service->{'service'.$i.'_desc'} }}</textarea>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Image
                            </label>

                            <input
                                type="text"
                                name="service_img{{ $i }}"
                                class="form-control"
                                value="{{ $service->{'service_img'.$i} }}">

                        </div>

                        <div class="mb-0">

                            <label class="form-label">
                                Extra Info
                            </label>

                            <textarea
                                name="service_info{{ $i }}"
                                rows="3"
                                class="form-control">{{ $service->{'service_info'.$i} }}</textarea>

                        </div>

                    </div>

                </div>

            @endfor

            {{-- TESTIMONIALS --}}
            <h3 class="fw-bold mb-4 mt-5">
                ⭐ Testimonials
            </h3>

            @for($i = 1; $i <= 5; $i++)

                <div class="card border-0 shadow-sm rounded-4 mb-4">

                    <div class="card-body">

                        <h5 class="fw-bold mb-4">
                            Testimonial {{ $i }}
                        </h5>

                        <div class="mb-3">

                            <label class="form-label">
                                Image
                            </label>

                            <input
                                type="text"
                                name="test_img{{ $i }}"
                                class="form-control"
                                value="{{ $service->{'test_img'.$i} }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Name
                            </label>

                            <input
                                type="text"
                                name="test_name{{ $i }}"
                                class="form-control"
                                value="{{ $service->{'test_name'.$i} }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Position
                            </label>

                            <input
                                type="text"
                                name="test_pos{{ $i }}"
                                class="form-control"
                                value="{{ $service->{'test_pos'.$i} }}">

                        </div>

                        <div class="mb-0">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea
                                name="test_desc{{ $i }}"
                                rows="3"
                                class="form-control">{{ $service->{'test_desc'.$i} }}</textarea>

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