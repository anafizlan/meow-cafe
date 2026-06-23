@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            📢 Edit Call To Action
        </h1>

        <p class="text-muted mb-0">
            Manage your CTA section
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

        <form action="/admin/cta/update" method="POST">

            @csrf

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Title
                        </label>

                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            value="{{ $cta->title }}">

                    </div>

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Button Text
                        </label>

                        <input
                            type="text"
                            name="button_text"
                            class="form-control"
                            value="{{ $cta->button_text }}">

                    </div>

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Button Link
                        </label>

                        <input
                            type="text"
                            name="button_link"
                            class="form-control"
                            value="{{ $cta->button_link }}">

                    </div>

                    <div class="mb-0">

                        <label class="form-label fw-semibold">
                            Image
                        </label>

                        <input
                            type="text"
                            name="image"
                            class="form-control"
                            value="{{ $cta->image }}">

                    </div>

                </div>

            </div>

            <button class="btn btn-primary btn-lg px-5 rounded-3">

                <i class="bi bi-check-circle"></i>
                Save Changes

            </button>

        </form>

    </div>

</div>

@endsection
