@extends('admin.layout')

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-3">

        </div>
    </div>


    @foreach ($messages as $message)

    <div class="chat-box p-9" data-simplebar>

        <div class="chat-list chat active-chat" data-user-id="1">
            <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <img src="../../dist/images/profile/user-8.jpg" alt="user8" width="48" height="48"
                        class="rounded-circle" />
                    <div>
                        <h6 class="fw-semibold mb-0">{{ $message->name }}</h6>
                        <p class="mb-0">{{ $message->phone }}</p>
                    </div>
                </div>
                <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">{{ $message->school_level }}</span>
            </div>
            <div class="border-bottom pb-7 mb-7">
                <h4 class="fw-semibold text-dark mb-3">{{ $message->inquiry_type }}</h4>
                <p class="mb-3 text-dark">
                    {{ $message->message }}
                </p>
                <p class="mb-0 text-dark">{{ $message->created_at->diffForHumans() }}</p>
                <h6 class="fw-semibold mb-0 text-dark pb-1">
                    {{ $message->created_at->format('d M Y, H:i') }}
                </h6>
            </div>
        </div>

    </div>

    @endforeach

</div>

@endsection