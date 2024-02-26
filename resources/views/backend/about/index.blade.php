@extends('backend.master')

@section('title')
    Add About Infoes
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add About</li>
            </ol>
            <div class="row">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="Experience" class="form-label">Experience</label>
                        <input type="number" class="form-control" id="Experience" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="Clients" class="form-label">Clients</label>
                        <input type="number" class="form-control" id="Clients" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="Projects" class="form-label">Projects</label>
                        <input type="number" class="form-control" id="Projects" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="about_photo" class="form-label">Upload About Photo</label>
                        <input type="file" class="form-control" id="about_photo" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="about_description" class="form-label">About Description</label>
                        <textarea class="form-control" placeholder="Write some words about you, what you do, your profession" id="about_description" style="height: 100px"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
