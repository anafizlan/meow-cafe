@extends('admin.layout')

@section('content')

<div class="mb-3">
    <h1 class="mb-4">
    Edit Footer Page
</h1>

    <a href="{{ url('/home') }}" target="_blank" class="btn btn-primary">
        🌐 View Website
    </a>
</div>
   

    <div class="card p-4">

        <form action="/admin/footer/update" method="POST">

            @csrf

            <div class="mb-3">
                <label>Site Name</label>
                <input type="text"
                       name="site_name"
                       class="form-control"
                       value="{{ $footer->site_name }}">
            </div>

            <div class="mb-3">
                <label>About Text</label>
                <textarea name="about_text"
                          class="form-control"
                          rows="4">{{ $footer->about_text }}</textarea>
            </div>

            <div class="mb-3">
                <label>Address</label>
                <input type="text"
                       name="address"
                       class="form-control"
                       value="{{ $footer->address }}">
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text"
                       name="phone"
                       class="form-control"
                       value="{{ $footer->phone }}">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       value="{{ $footer->email }}">
            </div>

            <hr>

            <h5>Social Media</h5>

            <div class="mb-3">
                <label>Facebook URL</label>
                <input type="text"
                       name="facebook"
                       class="form-control"
                       value="{{ $footer->facebook }}">
            </div>

            <div class="mb-3">
                <label>Instagram URL</label>
                <input type="text"
                       name="instagram"
                       class="form-control"
                       value="{{ $footer->instagram }}">
            </div>

            <div class="mb-3">
                <label>Twitter URL</label>
                <input type="text"
                       name="twitter"
                       class="form-control"
                       value="{{ $footer->twitter }}">
            </div>

            <div class="mb-3">
                <label>LinkedIn URL</label>
                <input type="text"
                       name="linkedin"
                       class="form-control"
                       value="{{ $footer->linkedin }}">
            </div>

            <button type="submit" class="btn btn-primary">
                Save Changes
            </button>

        </form>

    </div>

</div>

@endsection