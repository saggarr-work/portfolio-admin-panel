@extends('backend.master')

@section('title')
    Add Testimonial
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Testimonial</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Testimonial</li>
            </ol>
            <div class="row">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="testimonial" class="form-label">Add Avatar</label>
                        <input type="file" class="form-control" id="testimonial" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="about_description" class="form-label">Review</label>
                        <textarea class="form-control" placeholder="Write your clients reviews about your service" id="about_description" style="height: 100px"></textarea>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
