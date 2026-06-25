@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            🐾 Edit Service Details
        </h1>

        <p class="text-muted mb-0">
            Manage all service detail pages for Meow Cafe
        </p>
    </div>

    <a href="{{ url('/services') }}"
       target="_blank"
       class="btn btn-outline-primary">

        <i class="bi bi-box-arrow-up-right"></i>
        View Website

    </a>

</div>

@foreach ($services as $service)

<div class="card shadow-sm border-0 rounded-4 mb-5">

    <div class="card-body p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>

                <h3 class="fw-bold mb-1">
                    🐱 {{ $service->title }}
                </h3>

                <p class="text-muted mb-0">
                    Service Slug:
                    <span class="fw-semibold">
                        {{ $service->slug }}
                    </span>
                </p>

            </div>

            <span class="badge bg-primary px-3 py-2 rounded-pill">
                Service Detail
            </span>

        </div>

        <form action="/admin/service-detail/{{ $service->id }}"
              method="POST">

            @csrf

            {{-- MAIN SECTION --}}
            <h4 class="fw-bold mb-4">
                📸 Main Section
            </h4>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Image
                        </label>

                        <input type="text"
                               name="image"
                               class="form-control"
                               placeholder="assets/img/cat-service.jpg"
                               value="{{ $service->image }}">

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label fw-semibold">
                                Service Title
                            </label>

                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   value="{{ $service->title }}">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label fw-semibold">
                                Short Description
                            </label>

                            <textarea name="short_desc"
                                      rows="3"
                                      class="form-control">{{ $service->short_desc }}</textarea>

                        </div>

                    </div>

                </div>

            </div>

            {{-- ABOUT SECTION --}}
            <h4 class="fw-bold mb-4">
                📝 About Section
            </h4>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            About Title
                        </label>

                        <input type="text"
                               name="about_title"
                               class="form-control"
                               value="{{ $service->about_title }}">

                    </div>

                    <div class="mb-0">

                        <label class="form-label fw-semibold">
                            About Description
                        </label>

                        <textarea name="about_desc"
                                  rows="6"
                                  class="form-control">{{ $service->about_desc }}</textarea>

                    </div>

                </div>

            </div>

            {{-- FEATURES --}}
            <h4 class="fw-bold mb-4">
                ✨ Features
            </h4>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <label class="form-label fw-semibold">
                        Features List
                    </label>

                    <textarea name="features"
                              rows="6"
                              class="form-control">{{ $service->features }}</textarea>

                    <small class="text-muted d-block mt-2">
                        Separate each feature using |
                    </small>

                </div>

            </div>

            {{-- PRICING --}}
            <h4 class="fw-bold mb-4">
                💰 Pricing
            </h4>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <label class="form-label fw-semibold">
                        Pricing List
                    </label>

                    <textarea name="pricing"
                              rows="5"
                              class="form-control">{{ $service->pricing }}</textarea>

                    <small class="text-muted d-block mt-2">
                        Separate each pricing using |
                    </small>

                </div>

            </div>

            {{-- BUTTONS --}}
            <div class="d-flex gap-2">

                <button type="submit"
                        class="btn btn-primary btn-lg px-5 rounded-3">

                    <i class="bi bi-check-circle"></i>
                    Save Changes

                </button>

                <a href="{{ url('/dashboard') }}"
                   class="btn btn-outline-secondary btn-lg px-5 rounded-3">

                    <i class="bi bi-x-circle"></i>
                    Cancel

                </a>

            </div>

        </form>

    </div>

</div>

@endforeach

@endsection