@extends('backend.master')

@section('title')
    Add Portfolio Infoes
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Portfolio</li>
            </ol>
            <div class="text-success">{{ Session('msg') }}</div>
            <div class="text-danger">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{route('add.portfolio')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="thumbnail" class="form-label">Image</label>
                        <input type="file" name="thumbnail" class="form-control" accept="image/*" id="thumbnail" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="title" class="form-label">Title</label>
                        <textarea class="form-control" name="title" placeholder="Write some words about the project" id="title" style="height: 100px" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="github_link" class="form-label">Github Link</label>
                        <input type="text" name="githubLink" class="form-control" id="github_link" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="live_demo" class="form-label">Live Demo</label>
                        <input type="text" name="liveDemo" class="form-control" id="live_demo" value="" required>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
