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


    <div class="widget-content searchable-container list">
        <!-- --------------------- start Contact ---------------- -->
        <div class="card card-body">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <form class="position-relative">
                        <input type="text" class="form-control article-search ps-5" id="input-search"
                            placeholder="Search Contacts..." />
                        <i
                            class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form>
                </div>
                <div
                    class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <div class="action-btn show-btn" style="display: none">
                        <a href="javascript:void(0)"
                            class="delete-multiple btn-light-danger btn me-2 text-danger d-flex align-items-center font-medium">
                            <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row
                        </a>
                    </div>
                    <a href="{{ route('admin.articles.create') }}" id="btn-add-contact"
                        class="btn btn-info d-flex align-items-center">
                        <i class="ti ti-plus text-white me-1 fs-5"></i> Write New Article
                    </a>
                </div>
            </div>
        </div>
        <!-- ---------------------
                            end Contact
                        ---------------- -->
        <!-- Modal -->
        <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h5 class="modal-title">Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="add-contact-box">
                            <div class="add-contact-content">
                                <form id="addContactModalTitle">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-name">
                                                <input type="text" id="c-name" class="form-control"
                                                    placeholder="Name" />
                                                <span class="validation-text text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-email">
                                                <input type="text" id="c-email" class="form-control"
                                                    placeholder="Email" />
                                                <span class="validation-text text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-occupation">
                                                <input type="text" id="c-occupation" class="form-control"
                                                    placeholder="Occupation" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 contact-phone">
                                                <input type="text" id="c-phone" class="form-control"
                                                    placeholder="Phone" />
                                                <span class="validation-text text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 contact-location">
                                                <input type="text" id="c-location" class="form-control"
                                                    placeholder="Location" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btn-add" class="btn btn-success rounded-pill px-4">Add</button>
                        <button id="btn-edit" class="btn btn-success rounded-pill px-4">Save</button>
                        <button class="btn btn-danger rounded-pill px-4" data-bs-dismiss="modal"> Discard </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table search-table align-middle text-nowrap">
                    <thead class="header-item">
                        <th>No</th>
                        <th>Title</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                        @forelse ($articles as $article)

                        <tr class="search-items">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->created_at }}</td>

                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('admin.articles.destroy', $article) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.articles.show', $article) }}"
                                        id="{{ $article->id }}-edit-btn" class="btn btn-primary">View</a>

                                    <a href="{{ route('admin.articles.edit', $article) }}"
                                        id="{{ $article->id }}-edit-btn" class="btn btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-danger"
                                        id="{{ $article->id }}-delete-btn">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No articles found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

@endsection