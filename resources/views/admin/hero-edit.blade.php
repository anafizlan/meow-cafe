<!DOCTYPE html>
<html>
<head>
    <title>Edit Home Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Hero Section</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/admin/hero/update" method="POST">
        @csrf

        <div class="mb-3">
            <label>Hero Title</label>
            <textarea name="title" class="form-control" rows="3">{{ $hero->title }}</textarea>
        </div>

        <div class="mb-3">
            <label>Button Text</label>
            <input
                type="text"
                name="button_text"
                class="form-control"
                value="{{ $hero->button_text }}">
        </div>

        <div class="mb-3">
            <label>Video URL</label>
            <input
                type="text"
                name="video_url"
                class="form-control"
                value="{{ $hero->video_url }}">
        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</div>

</body>
</html>