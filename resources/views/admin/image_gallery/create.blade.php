@extends('admin.layout')

@section('content')

<div class="container-fluid">

    <div class="card col-md-6 col-lg-6 d-flex align-items-stretch">
        <div class="card-body">

            <form action="{{ route('admin.image.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="unit" class="form-label">Unit</label>
                    <select name="unit" id="unit" class="form-control @error('unit') is-invalid @enderror">
                        <option value="" disabled selected>Select Unit</option>
                        <option value="Kindergarten">Kindergarten</option>
                        <option value="Primary">Primary</option>
                        <option value="High School">High School</option>
                    </select>
                    @error('unit')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" rows="3"></textarea>
                    @error('description')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Image Link</label>
                    <input type="url" class="form-control @error('link') is-invalid @enderror" id="link" name="link">
                    @error('link')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="album" class="form-label">Album</label>
                    <input type="text" class="form-control @error('album') is-invalid @enderror" id="album"
                        name="album">
                    @error('album')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                        value="{{ date('Y-m-d') }}">
                    @error('date')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>

@endsection