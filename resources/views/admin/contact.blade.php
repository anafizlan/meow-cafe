@extends('admin.layout')

@section('content')

<div class="mb-3">
    <h1 class="mb-4">
    Edit Contact Page
</h1>

    <a href="{{ url('/home') }}" target="_blank" class="btn btn-primary">
        🌐 View Website
    </a>
</div>


<div class="card p-4">

<form action="/admin/contact/update" method="POST">
    @csrf

    <div class="mb-3">
        <label>Address</label>

        <textarea
            name="address"
            class="form-control"
            rows="4">{{ $contact->address }}</textarea>
    </div>

    <div class="mb-3">
        <label>Phone Number</label>

        <input
            type="text"
            name="phone"
            class="form-control"
            value="{{ $contact->phone }}">
    </div>

    <div class="mb-3">
        <label>Email</label>

        <input
            type="email"
            name="email"
            class="form-control"
            value="{{ $contact->email }}">
    </div>

    <button class="btn btn-primary">
        Save Changes
    </button>

</form>

</div>

@endsection