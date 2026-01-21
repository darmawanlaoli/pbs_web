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

            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="form-label">Title</label>
                    <input type="text" maxlength="255" name="title" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Deskripsi Singkat (SEO)</label>
                    <textarea name="excerpt" maxlength="225" class="form-control" rows="2"></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Konten</label>
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content" class="min-h-[300px] border p-2"></trix-editor>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="mb-4">
                        <label class="form-label">Thumbnail Gambar</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Keywords SEO (Pisahkan dengan koma)</label>
                        <input type="text" name="meta_keywords"
                            value="sekolah di harapan indah, sekolah internasional, sekolah di bekasi, school in bekasi, school in harapan indah"
                            class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Publish</button>
            </form>

        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>



</div>

@endsection