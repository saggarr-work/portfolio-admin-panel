@extends('backend.master')

@section('title')
    Edit About Infoes
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit About</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{ route('update.about', ['id' => $about->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="experience" class="form-label">Total Experience</label>
                        <input type="number" name="experience" class="form-control" id="experience"
                            value="{{ $about->experience }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="clients" class="form-label">Total Clients</label>
                        <input type="number" name="client" class="form-control" id="clients"
                            value="{{ $about->client }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="projects" class="form-label">Total Projects</label>
                        <input type="number" name="project" class="form-control" id="projects"
                            value="{{ $about->project }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="about_photo" class="form-label">Upload About Photo</label>
                        <input type="file" name="photo" class="form-control" id="about_photo" value="">
                        <div class="col-md-12 mt-2">
                            <img src="{{ asset($about->photo) }}" height="50px" width="50px" alt="about_photo">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="about_description" class="form-label">About Description</label>
                        <textarea class="form-control" name="description" placeholder="Write some words about you, what you do, your profession"
                            id="summernote" style="height: 100px">{{ $about->description }}</textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update About</button>
                        <a class="btn btn-danger" href="{{ route('manage.about') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
