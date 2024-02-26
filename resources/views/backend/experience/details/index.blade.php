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
            <div class="row">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Select experience</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Select experience</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Language or Tools</label>
                        <input type="text" class="form-control" id="field_of_experience" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="field_of_experience" class="form-label">Level of Experience</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Basic</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Intermidiate</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Experienced</label>
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
