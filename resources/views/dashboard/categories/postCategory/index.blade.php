@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post {{ auth()->user()->name }}</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/categories" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Category</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus autocomplete="off" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" autocomplete="off" value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
</div>

<script>
    const title = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });


    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })



</script>

@endsection