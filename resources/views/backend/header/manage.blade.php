@extends('backend.master')

@section('title')
    Manage Header Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Header</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage Header</li>
            </ol>
            <div class="text-success">{{ Session('msg') }}</div>
            <div class="text-danger">{{ Session('error') }}</div>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Manage Header & Footer Info
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Full Name</th>
                                    <th>Designation</th>
                                    <th>CV</th>
                                    <th>Photo</th>
                                    <th>Github Link</th>
                                    <th>Facebook Link</th>
                                    <th>instagram Link</th>
                                    <th>whatsapp Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($header as $header)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
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
                                        <td>{{ $header->githubLink }}</td>
                                        <td>{{ $header->facebookLink }}</td>
                                        <td>{{ $header->instagramLink }}</td>
                                        <td>{{ $header->whatsappLink }}</td>
                                        <td>
                                            <a type="button" href="{{ route('edit.header', ['id' => $header->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <a type="button" href="{{ route('show.header', ['id' => $header->id]) }}"
                                                class="btn btn-primary">View</a>
                                            <form action="{{ route('delete.header', ['id' => $header->id]) }}"
                                                method="POST">
                                                @csrf
                                                <button class="btn btn-danger">Delete</button>
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
    </main>
@endsection
