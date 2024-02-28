@extends('backend.master')

@section('title')
    Manage Experience Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Experience</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage Experience</li>
            </ol>
            <div class="text-success">{{ Session('msg') }}</div>
            <div class="text-danger">{{ Session('error') }}</div>
            <div class="row">
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
                                    <th>Experience</th>
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
                                        <td>{{ $experienceDetails->levelOfExperience }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('edit.details.experience', ['id' => $experienceDetails->id])}}">Edit</a>
                                            <form action="{{route('delete.details.experience', ['id' => $experienceDetails->id])}}" method="POST">
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
