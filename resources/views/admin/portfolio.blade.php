@extends('admin.layout')

@section('content')

<div class="mb-3">
    <h1 class="mb-4">
    Edit Portfolio Page
</h1>

    <a href="{{ url('/home') }}" target="_blank" class="btn btn-primary">
        🌐 View Website
    </a>
</div>



@foreach($portfolioItems as $item)

<div class="card mb-4">
    <div class="card-body">

    <form action="/admin/portfolio/{{ $item->id }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Category</label>
            <input type="text"
                   name="category"
                   class="form-control"
                   value="{{ $item->category }}">
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $item->title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description"
                      class="form-control"
                      rows="4">{{ $item->description }}</textarea>
        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>


</div>

@endforeach

</div>

@endsection
