@extends('admin.layout')

@section('content')

<div class="mb-3">
    <h1 class="mb-4">
    Edit Team Page
</h1>

    <a href="{{ url('/home') }}" target="_blank" class="btn btn-primary">
        🌐 View Website
    </a>
</div>



<div class="card p-4">

<form action="/admin/team/update" method="POST">
    @csrf

    <h4>Member 1</h4>

    <input
        type="text"
        name="member1_name"
        class="form-control mb-3"
        value="{{ $team->member1_name }}">

    <input
        type="text"
        name="member1_position"
        class="form-control mb-3"
        value="{{ $team->member1_position }}">

    <input
        type="text"
        name="member1_image"
        class="form-control mb-4"
        value="{{ $team->member1_image }}">

    <hr>

    <h4>Member 2</h4>

    <input
        type="text"
        name="member2_name"
        class="form-control mb-3"
        value="{{ $team->member2_name }}">

    <input
        type="text"
        name="member2_position"
        class="form-control mb-3"
        value="{{ $team->member2_position }}">

    <input
        type="text"
        name="member2_image"
        class="form-control mb-4"
        value="{{ $team->member2_image }}">

    <hr>

    <h4>Member 3</h4>

    <input
        type="text"
        name="member3_name"
        class="form-control mb-3"
        value="{{ $team->member3_name }}">

    <input
        type="text"
        name="member3_position"
        class="form-control mb-3"
        value="{{ $team->member3_position }}">

    <input
        type="text"
        name="member3_image"
        class="form-control mb-4"
        value="{{ $team->member3_image }}">

    <hr>

    <h4>Member 4</h4>

    <input
        type="text"
        name="member4_name"
        class="form-control mb-3"
        value="{{ $team->member4_name }}">

    <input
        type="text"
        name="member4_position"
        class="form-control mb-3"
        value="{{ $team->member4_position }}">

    <input
        type="text"
        name="member4_image"
        class="form-control mb-4"
        value="{{ $team->member4_image }}">

    <button class="btn btn-primary">
        Save Changes
    </button>

</form>

</div>

@endsection