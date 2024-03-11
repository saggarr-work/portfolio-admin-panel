@extends('backend.master')

@section('title')
    Manage Header
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Header/Footer</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage Infoes</li>
            </ol>
            
            @if (Session::has('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span>{{ Session('msg') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span>{{ Session('error') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row mt-3">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Manage Header & Footer Info
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Designation</th>
                                    <th>CV</th>
                                    <th>Photo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($header as $header)
                                    <tr>
                                        <td>{{ $header->fullName }}</td>
                                        <td>{{ $header->designation }}</td>
                                        <td>
                                            <embed src="{{ asset($header->cv) }}" width="50px" height="50px"
                                                alt="header_cv">
                                        </td>
                                        <td>
                                            <img src="{{ asset($header->photo) }}" width="50px" height="50px"
                                                alt="header_photo">
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a type="button" href="{{ route('edit.header', ['id' => $header->id]) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a type="button" href="{{ route('show.header', ['id' => $header->id]) }}"
                                                    class="btn btn-primary ms-2">View</a>
                                                <form action="{{ route('delete.header', ['id' => $header->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="btn btn-danger ms-2" onclick="return confirm('Delete all header infoes ?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
