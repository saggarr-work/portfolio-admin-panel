@extends('backend.master')

@section('title')
    Manage About Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage About</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row mt-3">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Manage data of about info
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Total Experience</th>
                                    <th>Total Clients</th>
                                    <th>Total Projects</th>
                                    <th>Photo</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($about as $about)
                                    <tr>
                                        <td>{{ $about->experience }} Years</td>
                                        <td>{{ $about->client }} Clients</td>
                                        <td>{{ $about->project }} Projects</td>
                                        <td>
                                            <img src="{{ asset($about->photo) }}" height="50px" width="50px"
                                                alt="about_photo">
                                        </td>
                                        <td>{{ substr($about->description, 0, 10) }}...</td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-success"
                                                    href="{{ route('edit.about', ['id' => $about->id]) }}">Edit</a>
                                                <a class="btn btn-primary ms-2"
                                                    href="{{ route('show.about', ['id' => $about->id]) }}">Show</a>
                                                <form action="{{ route('delete.about', ['id' => $about->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="btn btn-danger ms-2"
                                                        onclick="return confirm('Delete all about infoes ?')">Delete</button>
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
