@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            👥 Edit Team Page
        </h1>

        <p class="text-muted mb-0">
            Manage team member information
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

        <form action="/admin/team/update" method="POST">

            @csrf

            @for($i = 1; $i <= 4; $i++)

                <div class="card border-0 shadow-sm rounded-4 mb-4">

                    <div class="card-body">

                        <h5 class="fw-bold mb-4">
                            Member {{ $i }}
                        </h5>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Name
                            </label>

                            <input
                                type="text"
                                name="member{{ $i }}_name"
                                class="form-control"
                                value="{{ $team->{'member'.$i.'_name'} }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Position
                            </label>

                            <input
                                type="text"
                                name="member{{ $i }}_position"
                                class="form-control"
                                value="{{ $team->{'member'.$i.'_position'} }}">

                        </div>

                        <div class="mb-0">

                            <label class="form-label fw-semibold">
                                Image
                            </label>

                            <input
                                type="text"
                                name="member{{ $i }}_image"
                                class="form-control"
                                value="{{ $team->{'member'.$i.'_image'} }}">

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
