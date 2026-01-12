@extends('admin.layout')

@section('content')

<div class="container-fluid">

    <a href="{{ route('admin.image.create') }}" class="btn btn-primary">Add Image</a>

    <div class="col-md-12 col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr class="text-muted fw-semibold">
                                <th scope="col" class="ps-0">No</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Description</th>
                                <th scope="col">Link</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="border-top">

                            @foreach ($galleries as $gallery)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $gallery->unit }}</span>
                                </td>
                                <td>{{ $gallery->description }}</td>
                                <td>
                                    <a class="badge badge-pill bg-primary" href="{{ $gallery->link }}">Open</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.image.edit', $gallery->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admin.image.destroy', $gallery->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this image?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection