@extends('backend.master')

@section('title')
    Edit Experience Infoes
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Experience</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Experience</li>
            </ol>
            <div class="text-success">{{ Session('msg') }}</div>
            <div class="text-danger">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{ route('update.experience', ['id' => $experience->id]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Field of experience</label>
                        <input type="text" name="fieldOfExperience" class="form-control" id="field_of_experience"
                            value="{{$experience->fieldOfExperience}}" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection