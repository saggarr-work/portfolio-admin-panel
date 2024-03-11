@extends('backend.master')

@section('title')
    Add Experience
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Experience</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Experience</li>
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

            <div class="row">
                <form class="row g-3" action="{{ route('add.experience') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Field of experience</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="fieldOfExperience" class="form-control" id="field_of_experience" value="" required>
                        <span class="text-danger">{{ $errors->has('fieldOfExperience') ? $errors->first('fieldOfExperience') : '' }}</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Experience</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
