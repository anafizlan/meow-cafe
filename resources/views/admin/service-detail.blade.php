@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
<<<<<<< Updated upstream
        <h1 class="fw-bold mb-1">
            🐾 Service Details
        </h1>

        <p class="text-muted mb-0">
            Manage your service content
        </p>
=======

        <h1 class="fw-bold mb-1">
            🐾 Edit Service Details
        </h1>

        <p class="text-muted mb-0">
            Manage all service detail pages for Meow Cafe
        </p>

>>>>>>> Stashed changes
    </div>

    <a href="{{ url('/services') }}"
       target="_blank"
<<<<<<< Updated upstream
       class="btn btn-outline-primary">
=======
       class="btn btn-outline-primary rounded-3">
>>>>>>> Stashed changes

        <i class="bi bi-box-arrow-up-right"></i>
        View Website

    </a>

</div>

<<<<<<< Updated upstream
<div class="card shadow-sm border-0 rounded-4">

    <div class="card-body p-4">

        <form action="/admin/service-detail/update" method="POST">
            @csrf

            {{-- SERVICE SELECTION --}}
            <h3 class="fw-bold mb-4">
                📋 Select Service
            </h3>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-0">
                        <label class="form-label fw-semibold">
                            Service
                        </label>

                        <select name="service_id" class="form-control" required>
                            <option value="">-- Select a Service --</option>
                            <option value="grooming" {{ (isset($service) && $service->slug === 'grooming') ? 'selected' : '' }}>
                                🧴 Cat Grooming
                            </option>
                            <option value="adoption" {{ (isset($service) && $service->slug === 'adoption') ? 'selected' : '' }}>
                                💕 Cat Adoption
                            </option>
                            <option value="birthday-party" {{ (isset($service) && $service->slug === 'birthday-party') ? 'selected' : '' }}>
                                🎉 Cat Birthday Party
                            </option>
                            <option value="hotel" {{ (isset($service) && $service->slug === 'hotel') ? 'selected' : '' }}>
                                🏨 Cat Hotel
                            </option>
                            <option value="playroom" {{ (isset($service) && $service->slug === 'playroom') ? 'selected' : '' }}>
                                🎮 Cat Playroom
                            </option>
                            <option value="veterinary" {{ (isset($service) && $service->slug === 'veterinary') ? 'selected' : '' }}>
                                💉 Cat Veterinary Consultation
                            </option>
                        </select>

                    </div>

                </div>

            </div>

            {{-- MAIN SECTION --}}
            <h3 class="fw-bold mb-4">
                📸 Main Section
            </h3>
=======
@foreach($services as $service)

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
>>>>>>> Stashed changes

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

<<<<<<< Updated upstream
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Image
                        </label>

                        <input
                            type="text"
                            name="image"
                            class="form-control"
                            placeholder="assets/img/cat-service.jpg"
                            value="{{ $service->image ?? '' }}">

                        <small class="text-muted">Path relative to /public/</small>
=======
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
                                Slug
                            </label>

                            <input type="text"
                                   name="slug"
                                   class="form-control"
                                   value="{{ $service->slug }}"
                                   readonly>

                        </div>
>>>>>>> Stashed changes

                    </div>

                    <div class="mb-3">
<<<<<<< Updated upstream
                        <label class="form-label fw-semibold">
                            Title
                        </label>

                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            placeholder="e.g., Cat Grooming"
                            value="{{ $service->title ?? '' }}">

                    </div>

                    <div class="mb-3">
=======

>>>>>>> Stashed changes
                        <label class="form-label fw-semibold">
                            Short Description
                        </label>

<<<<<<< Updated upstream
                        <textarea
                            name="short_desc"
                            rows="3"
                            class="form-control"
                            placeholder="Brief description shown in hero section">{{ $service->short_desc ?? '' }}</textarea>
=======
                        <textarea name="short_desc"
                                  rows="4"
                                  class="form-control">{{ $service->short_desc }}</textarea>
>>>>>>> Stashed changes

                    </div>

                    <div class="mb-0">
<<<<<<< Updated upstream
=======

                        <label class="form-label fw-semibold">
                            Image
                        </label>

                        <input type="text"
                               name="image"
                               class="form-control"
                               value="{{ $service->image }}">

                        <small class="text-muted">
                            Example: cat service1.jpg
                        </small>

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

>>>>>>> Stashed changes
                        <label class="form-label fw-semibold">
                            About Title
                        </label>

<<<<<<< Updated upstream
                        <input
                            type="text"
                            name="about_title"
                            class="form-control"
                            placeholder="e.g., About Our Grooming Service"
                            value="{{ $service->about_title ?? '' }}">

                    </div>

                </div>

            </div>

            {{-- ABOUT DESCRIPTION --}}
            <h3 class="fw-bold mb-4">
                📝 About Description
            </h3>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-0">
=======
                        <input type="text"
                               name="about_title"
                               class="form-control"
                               value="{{ $service->about_title }}">

                    </div>

                    <div class="mb-0">

>>>>>>> Stashed changes
                        <label class="form-label fw-semibold">
                            About Description
                        </label>

<<<<<<< Updated upstream
                        <textarea
                            name="about_desc"
                            rows="8"
                            class="form-control"
                            placeholder="Detailed description of the service">{{ $service->about_desc ?? '' }}</textarea>
=======
                        <textarea name="about_desc"
                                  rows="6"
                                  class="form-control">{{ $service->about_desc }}</textarea>
>>>>>>> Stashed changes

                    </div>

                </div>

            </div>

<<<<<<< Updated upstream
            {{-- FEATURES / WHAT'S INCLUDED --}}
            <h3 class="fw-bold mb-4">
                ✨ Features / What's Included
            </h3>
=======
            {{-- FEATURES --}}
            <h4 class="fw-bold mb-4">
                ✨ Features
            </h4>
>>>>>>> Stashed changes

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-0">
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
                        <label class="form-label fw-semibold">
                            Features List
                        </label>

<<<<<<< Updated upstream
                        <textarea
                            name="features"
                            rows="8"
                            class="form-control"
                            placeholder="Enter each feature on a new line or separate with |&#10;Example:&#10;Full Body Brushing&#10;Nail Trimming&#10;Ear Cleaning">{{ $service->features ?? '' }}</textarea>

                        <small class="text-muted d-block mt-2">
                            💡 Tip: Separate features with a new line or pipe character (|)
=======
                        <textarea name="features"
                                  rows="6"
                                  class="form-control">{{ $service->features }}</textarea>

                        <small class="text-muted d-block mt-2">
                            Separate each feature using |
>>>>>>> Stashed changes
                        </small>

                    </div>

                </div>

            </div>

            {{-- PRICING --}}
<<<<<<< Updated upstream
            <h3 class="fw-bold mb-4">
                💰 Pricing
            </h3>
=======
            <h4 class="fw-bold mb-4">
                💰 Pricing
            </h4>
>>>>>>> Stashed changes

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-0">
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
                        <label class="form-label fw-semibold">
                            Pricing List
                        </label>

<<<<<<< Updated upstream
                        <textarea
                            name="pricing"
                            rows="6"
                            class="form-control"
                            placeholder="Enter each price on a new line or separate with |&#10;Example:&#10;Basic Grooming - $15&#10;Premium Grooming - $25&#10;Luxury Grooming - $40">{{ $service->pricing ?? '' }}</textarea>

                        <small class="text-muted d-block mt-2">
                            💡 Tip: Separate prices with a new line or pipe character (|)
=======
                        <textarea name="pricing"
                                  rows="5"
                                  class="form-control">{{ $service->pricing }}</textarea>

                        <small class="text-muted d-block mt-2">
                            Separate each pricing using |
>>>>>>> Stashed changes
                        </small>

                    </div>

                </div>

            </div>

<<<<<<< Updated upstream
            {{-- ACTION BUTTONS --}}
            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-primary btn-lg px-5 rounded-3">

                    <i class="bi bi-check-circle"></i>
                    Save Changes

                </button>

                <a href="{{ url('/admin/dashboard') }}" class="btn btn-outline-secondary btn-lg px-5 rounded-3">

                    <i class="bi bi-x-circle"></i>
                    Cancel

                </a>

            </div>
=======
            {{-- BUTTON --}}
            <button class="btn btn-primary btn-lg px-5 rounded-3">

                <i class="bi bi-check-circle"></i>
                Save Changes

            </button>
>>>>>>> Stashed changes

        </form>

    </div>

</div>

<<<<<<< Updated upstream
@endsection
=======
@endforeach

@endsection
>>>>>>> Stashed changes
