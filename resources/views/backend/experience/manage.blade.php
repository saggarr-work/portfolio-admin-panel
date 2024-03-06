@extends('backend.master')

@section('title')
    Manage Experience
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Experience</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage Experience</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row mt-3">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Showing Experience & details
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Field of Experience</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($experience as $experience)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $experience->fieldOfExperience }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('edit.experience', ['id' => $experience->id]) }}"
                                                    class="btn btn-success">Edit</a>
                                                <form action="{{ route('delete.experience', ['id' => $experience->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="btn btn-danger ms-2" onclick="return confirm('Delete experience {{ $experience->fieldOfExperience }} ?')">Delete</button>
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
