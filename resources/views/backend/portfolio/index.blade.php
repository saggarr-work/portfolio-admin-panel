@extends('backend.master')

@section('title')
    Add Portfolio
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Portfolio</li>
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
                <form class="row g-3" action="{{ route('add.portfolio') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="thumbnail" class="form-label">Thumbnail</label><span class="text-danger"><b> * </b></span>
                        <input type="file" name="thumbnail" class="form-control" accept="image/*" id="thumbnail" required>
                        <span class="text-danger">{{ $errors->has('thumbnail') ? $errors->first('thumbnail') : '' }}</span>
                    </div>
                    <div class="col-md-12">
                        <label for="title" class="form-label">Title</label><span class="text-danger"><b> * </b></span>
                        <textarea class="form-control" name="title" id="summernote"></textarea>
                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="github_link" class="form-label">Github Link</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="githubLink" class="form-control" id="github_link">
                        <span class="text-danger">{{ $errors->has('githubLink') ? $errors->first('githubLink') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="live_demo" class="form-label">Live Demo</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="liveDemo" class="form-control" id="live_demo" required>
                        <span class="text-danger">{{ $errors->has('liveDemo') ? $errors->first('liveDemo') : '' }}</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Portfolio</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
