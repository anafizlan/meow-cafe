@extends('admin.layout')

@section('content')

<div class="mb-3">
    <h1 class="mb-4">
    Edit About Page
</h1>

    <a href="{{ url('/home') }}" target="_blank" class="btn btn-primary">
        🌐 View Website
    </a>
</div>
<div class="card p-4">

    <form action="/admin/about/update" method="POST">
        @csrf

        <div class="mb-3">
            <label>About Title</label>

            <input
                type="text"
                name="title"
                class="form-control"
                value="{{ $about->title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>

            <textarea
                name="description"
                rows="8"
                class="form-control">{{ $about->description }}</textarea>
        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>

@endsection