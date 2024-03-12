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
                <form class="row g-3" action="{{ route('add.about') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="experience" class="form-label">Total Experience (In Years)</label><span
                            class="text-danger"><b> *
                            </b></span>
                        <input type="number" name="experience" class="form-control" id="experience" value=""
                            required>
                        <span
                            class="text-danger">{{ $errors->has('experience') ? $errors->first('experience') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="clients" class="form-label">Total Clients</label><span class="text-danger"><b> *
                            </b></span>
                        <input type="number" name="client" class="form-control" id="clients" value="" required>
                        <span class="text-danger">{{ $errors->has('client') ? $errors->first('client') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="projects" class="form-label">Total Projects</label><span class="text-danger"><b> *
                            </b></span>
                        <input type="number" name="project" class="form-control" id="projects" value="" required>
                        <span class="text-danger">{{ $errors->has('project') ? $errors->first('project') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="about_photo" class="form-label">Upload Formal Photo</label><span class="text-danger"><b>
                                * </b></span><sub>(prefered size 300 x 300 px)</sub>
                        <input type="file" accept="image/*" name="photo" class="form-control" id="about_photo" value="" required>
                        <span class="text-danger">{{ $errors->has('photo') ? $errors->first('photo') : '' }}</span>
                    </div>
                    <div class="col-md-12">
                        <label for="summernote" class="form-label">About Description</label><span class="text-danger"><b> *
                            </b></span>
                        <textarea class="form-control" name="description" id="summernote"></textarea>
                        <span
                            class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add About</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
