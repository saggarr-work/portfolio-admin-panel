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
                <form class="row g-3" action="{{ route('update.about', ['id' => $about->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="experience" class="form-label">Total Experience (In Years)</label>
                        <input type="number" name="experience" class="form-control" id="experience"
                            value="{{ $about->experience }}" required>
                        <span
                            class="text-danger">{{ $errors->has('experience') ? $errors->first('experience') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="client" class="form-label">Total Clients</label>
                        <input type="number" name="client" class="form-control" id="client"
                            value="{{ $about->client }}" required>
                        <span class="text-danger">{{ $errors->has('client') ? $errors->first('client') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="project" class="form-label">Total Projects</label>
                        <input type="number" name="project" class="form-control" id="project"
                            value="{{ $about->project }}" required>
                        <span class="text-danger">{{ $errors->has('project') ? $errors->first('project') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="about_photo" class="form-label">Upload Formal Photo</label> <sub>(prefered size 300 x 300 px)</sub>
                        <input type="file" name="photo" class="form-control" id="about_photo" value="">
                        <div class="col-md-12 mt-2">
                            <img src="{{ asset($about->photo) }}" height="50px" width="50px" alt="about_photo">
                        </div>
                        <span class="text-danger">{{ $errors->has('photo') ? $errors->first('photo') : '' }}</span>
                    </div>
                    <div class="col-md-12">
                        <label for="about_description" class="form-label">About Description</label>
                        <textarea class="form-control" name="description" id="summernote">{{ $about->description }}</textarea>
                        <span
                            class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
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
