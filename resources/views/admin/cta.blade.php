@extends('admin.layout')

@section('content')

<div class="card p-4">

    <h2 class="mb-4">
        Edit Call To Action
    </h2>

    <form action="/admin/cta/update" method="POST">

        @csrf

        <div class="mb-3">
            <label>Title</label>

            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $cta->title }}">
        </div>

        <div class="mb-3">
            <label>Button Text</label>

            <input type="text"
                   name="button_text"
                   class="form-control"
                   value="{{ $cta->button_text }}">
        </div>

        <div class="mb-3">
            <label>Button Link</label>

            <input type="text"
                   name="button_link"
                   class="form-control"
                   value="{{ $cta->button_link }}">
        </div>

        <div class="mb-3">
            <label>Image</label>

            <input type="text"
                   name="image"
                   class="form-control"
                   value="{{ $cta->image }}">
        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>

@endsection