@extends('backend.master')

@section('title')
    Show experience Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Experience</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Experience</li>
            </ol>
            <div class="text-success">{{ Session('msg') }}</div>
            <div class="text-danger">{{ Session('error') }}</div>
            <div class="row">
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
                                    <th>Experience</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($experience as $experience)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $experience->fieldOfExperience }}</td>
                                        <td>
                                            <a href="{{ route('edit.experience', ['id' => $experience->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <form action="{{ route('delete.experience', ['id' => $experience->id]) }}"
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
