@extends('backend.master')

@section('title')
    Add Experience Details
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Experience Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Experience Details</li>
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
                <form class="row g-3" action="{{ route('add.details.experience') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Select Experience</label><span
                            class="text-danger"><b> * </b></span>
                        <select class="form-select" name="experience_id" aria-label="Default select example" required>
                            <option selected disabled>Select</option>
                            @foreach ($experiences as $experience)
                                <option value="{{ $experience->id }}">{{ $experience->fieldOfExperience }}</option>
                            @endforeach
                        </select>
                        <span
                            class="text-danger">{{ $errors->has('experience_id') ? $errors->first('experience_id') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Language / Tools</label><span
                            class="text-danger"><b> * </b></span>
                        <input type="text" name="languageOrTools" class="form-control" id="field_of_experience"
                            value="" required>
                        <span
                            class="text-danger">{{ $errors->has('languageOrTools') ? $errors->first('languageOrTools') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Level of Experience</label><span
                            class="text-danger"><b> * </b></span>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="levelOfExperience" id="inlineRadio1"
                                    value="Basic">
                                <label class="form-check-label text-danger" for="inlineRadio1"><b>Basic</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="levelOfExperience" id="inlineRadio2"
                                    value="Intermediate">
                                <label class="form-check-label text-warning" for="inlineRadio2"><b>Intermediate</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="levelOfExperience" id="inlineRadio3"
                                    value="Experienced">
                                <label class="form-check-label text-success" for="inlineRadio3"><b>Experienced</b></label>
                            </div>
                        </div>
                        <span
                            class="text-danger">{{ $errors->has('levelOfExperience') ? $errors->first('levelOfExperience') : '' }}</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Experience Details</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
