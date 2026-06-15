@extends('admin.layout')

@section('content')

<div class="mb-3">
    <h1 class="mb-4">
    Edit Services Page
</h1>

    <a href="{{ url('/home') }}" target="_blank" class="btn btn-primary">
        🌐 View Website
    </a>
</div>


<div class="card p-4">

    <form action="/admin/services/update" method="POST">
        @csrf

        <div class="mb-4">
            <label>Section Title</label>
            <input type="text"
                   name="section_title"
                   class="form-control"
                   value="{{ $service->section_title }}">
        </div>

        <hr>

        <h4>Service 1</h4>

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                   name="service1_title"
                   class="form-control"
                   value="{{ $service->service1_title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="service1_desc"
                      class="form-control"
                      rows="3">{{ $service->service1_desc }}</textarea>
        </div>

        <hr>

        <h4>Service 2</h4>

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                   name="service2_title"
                   class="form-control"
                   value="{{ $service->service2_title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="service2_desc"
                      class="form-control"
                      rows="3">{{ $service->service2_desc }}</textarea>
        </div>

        <hr>

        <h4>Service 3</h4>

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                   name="service3_title"
                   class="form-control"
                   value="{{ $service->service3_title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="service3_desc"
                      class="form-control"
                      rows="3">{{ $service->service3_desc }}</textarea>
        </div>

        <hr>

        <h4>Service 4</h4>

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                   name="service4_title"
                   class="form-control"
                   value="{{ $service->service4_title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="service4_desc"
                      class="form-control"
                      rows="3">{{ $service->service4_desc }}</textarea>
        </div>

        <hr>

        <h4>Service 5</h4>

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                   name="service5_title"
                   class="form-control"
                   value="{{ $service->service5_title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="service5_desc"
                      class="form-control"
                      rows="3">{{ $service->service5_desc }}</textarea>
        </div>

        <hr>

        <h4>Service 6</h4>

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                   name="service6_title"
                   class="form-control"
                   value="{{ $service->service6_title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="service6_desc"
                      class="form-control"
                      rows="3">{{ $service->service6_desc }}</textarea>
        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>

@endsection