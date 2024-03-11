@extends('backend.master')

@section('title')
    Manage Experience Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Experience</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage Experience Details</li>
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
                        Manage Experience data
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Field of Experience</th>
                                    <th>Language or Tool</th>
                                    <th>Level of Experience</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($experienceDetails as $experienceDetails)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $experienceDetails->experience->fieldOfExperience }}</td>
                                        <td>{{ $experienceDetails->languageOrTools }}</td>
                                        <td>
                                            <p
                                                class="{{ $experienceDetails->levelOfExperience === 'Basic' ? 'text-danger' : ($experienceDetails->levelOfExperience === 'Intermediate' ? 'text-warning' : ($experienceDetails->levelOfExperience === 'Experienced' ? 'text-success' : 'text-default')) }}">
                                                <b>{{ $experienceDetails->levelOfExperience }}</b></p>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-success"
                                                    href="{{ route('edit.details.experience', ['id' => $experienceDetails->id]) }}">Edit</a>
                                                <form
                                                    action="{{ route('delete.details.experience', ['id' => $experienceDetails->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="btn btn-danger ms-2"
                                                        onclick="return confirm('Delete this detail ?')">Delete</button>
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
