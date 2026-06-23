@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            📞 Edit Contact Page
        </h1>

        <p class="text-muted mb-0">
            Manage your contact information
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

        <form action="/admin/contact/update" method="POST">
            @csrf

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Address
                        </label>

                        <textarea
                            name="address"
                            class="form-control"
                            rows="4">{{ $contact->address }}</textarea>

                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Phone Number
                        </label>

                        <input
                            type="text"
                            name="phone"
                            class="form-control"
                            value="{{ $contact->phone }}">

                    </div>

                    <div class="mb-0">
                        <label class="form-label fw-semibold">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ $contact->email }}">

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
