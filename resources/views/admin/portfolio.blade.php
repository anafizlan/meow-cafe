@extends('admin.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold mb-1">
            🎨 Edit Portfolio Page
        </h1>

        <p class="text-muted mb-0">
            Manage your portfolio items
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

        @foreach($portfolioItems as $item)

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-body">

                    <h5 class="fw-bold mb-4">
                        Portfolio Item {{ $loop->iteration }}
                    </h5>

                    <form action="/admin/portfolio/{{ $item->id }}" method="POST">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Category
                            </label>

                            <input
                                type="text"
                                name="category"
                                class="form-control"
                                value="{{ $item->category }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Image URL
                            </label>

                            <input
                                type="text"
                                name="image_url"
                                class="form-control"
                                value="{{ $item->image }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Title
                            </label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                value="{{ $item->title }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Description
                            </label>

                            <textarea
                                name="description"
                                class="form-control"
                                rows="4">{{ $item->description }}</textarea>

                        </div>

                        <button type="submit" class="btn btn-primary px-4 rounded-3">

                            <i class="bi bi-check-circle"></i>
                            Update

                        </button>

                    </form>

                </div>

            </div>

        @endforeach

    </div>

</div>

@endsection
