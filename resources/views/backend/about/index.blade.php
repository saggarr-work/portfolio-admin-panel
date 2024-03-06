@extends('backend.master')

@section('title')
    Add About Infoes
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add About Infoes</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{route('add.about')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="experience" class="form-label">Total Experience</label><span class="text-danger"><b> *
                        </b></span>
                        <input type="number" name="experience" class="form-control" id="experience" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="clients" class="form-label">Total Clients</label><span class="text-danger"><b> *
                        </b></span>
                        <input type="number" name="client" class="form-control" id="clients" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="projects" class="form-label">Total Projects</label><span class="text-danger"><b> *
                        </b></span>
                        <input type="number" name="project" class="form-control" id="projects" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="about_photo" class="form-label">Upload About Photo</label><span class="text-danger"><b> *
                        </b></span>
                        <input type="file" name="photo" class="form-control" id="about_photo" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="about_description" class="form-label">About Description</label><span class="text-danger"><b> *
                        </b></span>
                        <textarea class="form-control" name="description" placeholder="Write some words about you, what you do, your profession..." id="about_description" style="height: 100px"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add About</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
