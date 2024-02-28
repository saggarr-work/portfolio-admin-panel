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
            <div class="text-success">{{ Session('msg') }}</div>
            <div class="text-danger">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{route('add.details.experience')}}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Select experience</label>
                        <select class="form-select" name="experience_id" aria-label="Default select example">
                            <option selected disabled>Select experience</option>
                            @foreach ($experiences as $experience)
                                <option value="{{$experience->id}}">{{$experience->fieldOfExperience}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Language or Tools</label>
                        <input type="text" name="languageOrTools" class="form-control" id="field_of_experience" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Level of Experience</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="levelOfExperience" id="inlineRadio1"
                                    value="Basic">
                                <label class="form-check-label" for="inlineRadio1">Basic</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="levelOfExperience" id="inlineRadio2"
                                    value="Intermediate">
                                <label class="form-check-label" for="inlineRadio2">Intermediate</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="levelOfExperience" id="inlineRadio3"
                                    value="Experienced">
                                <label class="form-check-label" for="inlineRadio3">Experienced</label>
                            </div>
                        </div>
                    </div>



                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
