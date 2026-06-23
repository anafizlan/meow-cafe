@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            🔗 Edit Footer Page
        </h1>

        <p class="text-muted mb-0">
            Manage footer content & social links
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

        <form action="/admin/footer/update" method="POST">

            @csrf

            {{-- BASIC INFO --}}
            <h3 class="fw-bold mb-4">
                ℹ️ Basic Information
            </h3>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Site Name
                        </label>

                        <input type="text"
                               name="site_name"
                               class="form-control"
                               value="{{ $footer->site_name }}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            About Text
                        </label>

                        <textarea name="about_text"
                                  class="form-control"
                                  rows="4">{{ $footer->about_text }}</textarea>

                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Address
                        </label>

                        <input type="text"
                               name="address"
                               class="form-control"
                               value="{{ $footer->address }}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Phone
                        </label>

                        <input type="text"
                               name="phone"
                               class="form-control"
                               value="{{ $footer->phone }}">

                    </div>

                    <div class="mb-0">
                        <label class="form-label fw-semibold">
                            Email
                        </label>

                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ $footer->email }}">

                    </div>

                </div>

            </div>

            {{-- SOCIAL MEDIA --}}
            <h3 class="fw-bold mb-4">
                📱 Social Media
            </h3>

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">
                            Facebook URL
                        </label>

                        <input type="text"
                               name="facebook"
                               class="form-control"
                               value="{{ $footer->facebook }}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Instagram URL
                        </label>

                        <input type="text"
                               name="instagram"
                               class="form-control"
                               value="{{ $footer->instagram }}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Twitter URL
                        </label>

                        <input type="text"
                               name="twitter"
                               class="form-control"
                               value="{{ $footer->twitter }}">

                    </div>

                    <div class="mb-0">
                        <label class="form-label">
                            LinkedIn URL
                        </label>

                        <input type="text"
                               name="linkedin"
                               class="form-control"
                               value="{{ $footer->linkedin }}">

                    </div>

                </div>

            </div>

            <button type="submit" class="btn btn-primary btn-lg px-5 rounded-3">

                <i class="bi bi-check-circle"></i>
                Save Changes

            </button>

        </form>

    </div>

</div>

@endsection
