@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            🐾 Service Details
        </h1>

        <p class="text-muted mb-0">
            Manage your service content
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

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

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

                    </div>

                    <div class="mb-3">
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
                        <label class="form-label fw-semibold">
                            Short Description
                        </label>

                        <textarea
                            name="short_desc"
                            rows="3"
                            class="form-control"
                            placeholder="Brief description shown in hero section">{{ $service->short_desc ?? '' }}</textarea>

                    </div>

                    <div class="mb-0">
                        <label class="form-label fw-semibold">
                            About Title
                        </label>

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
                        <label class="form-label fw-semibold">
                            About Description
                        </label>

                        <textarea
                            name="about_desc"
                            rows="8"
                            class="form-control"
                            placeholder="Detailed description of the service">{{ $service->about_desc ?? '' }}</textarea>

                    </div>

                </div>

            </div>

            {{-- FEATURES / WHAT'S INCLUDED --}}
            <h3 class="fw-bold mb-4">
                ✨ Features / What's Included
            </h3>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-0">
                        <label class="form-label fw-semibold">
                            Features List
                        </label>

                        <textarea
                            name="features"
                            rows="8"
                            class="form-control"
                            placeholder="Enter each feature on a new line or separate with |&#10;Example:&#10;Full Body Brushing&#10;Nail Trimming&#10;Ear Cleaning">{{ $service->features ?? '' }}</textarea>

                        <small class="text-muted d-block mt-2">
                            💡 Tip: Separate features with a new line or pipe character (|)
                        </small>

                    </div>

                </div>

            </div>

            {{-- PRICING --}}
            <h3 class="fw-bold mb-4">
                💰 Pricing
            </h3>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-0">
                        <label class="form-label fw-semibold">
                            Pricing List
                        </label>

                        <textarea
                            name="pricing"
                            rows="6"
                            class="form-control"
                            placeholder="Enter each price on a new line or separate with |&#10;Example:&#10;Basic Grooming - $15&#10;Premium Grooming - $25&#10;Luxury Grooming - $40">{{ $service->pricing ?? '' }}</textarea>

                        <small class="text-muted d-block mt-2">
                            💡 Tip: Separate prices with a new line or pipe character (|)
                        </small>

                    </div>

                </div>

            </div>

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

        </form>

    </div>

</div>

@endsection
