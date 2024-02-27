@extends('backend.master')

@section('title')
    Add Service Details
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Service Details</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Service Details</li>
            </ol>
            <div class="row">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="select_service" class="form-label">Select Service</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Select Service</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control" id="heading" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="details" class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Write some words about given service" id="details" style="height: 100px"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
