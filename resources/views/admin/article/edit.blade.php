@extends('admin.layout')

@section('content')

<div class="container-fluid">
    <div class="card bg-primary shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8 text-white">{{ $title }}</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-white">
                            <li class="breadcrumb-item text-white">Admin</a>
                            </li>
                            <li class="breadcrumb-item text-white" aria-current="page">{{ $title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" maxlength="255" class="form-control"
                        value="{{ old('title', $article->title) }}" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Deskripsi Singkat (SEO)</label>
                    <textarea name="excerpt" class="form-control"
                        rows="3">{{ old('excerpt', $article->excerpt) }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Konten</label>
                    <input type="hidden" id="content" name="content" value="{{ old('content', $article->content) }}">
                    <trix-editor class="form-control" input="content"></trix-editor>
                    @error('content')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Current Image</label><br>
                    @if($article->image)
                    <img src="{{ asset('storage/'.$article->image) }}" width="150">
                    @else
                    <em>No image</em>
                    @endif
                </div>

                <div class="mb-3">
                    <label>Change Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control"
                        value="{{ old('meta_keywords', $article->meta_keywords) }}">
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>

        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>



</div>

@endsection