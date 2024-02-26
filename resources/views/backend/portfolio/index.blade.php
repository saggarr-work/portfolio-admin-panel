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
            <div class="row">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="img" class="form-label">Image</label>
                        <input type="file" class="form-control" id="img" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="github_link" class="form-label">Github Link</label>
                        <input type="text" class="form-control" id="github_link" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="live_demo" class="form-label">Live Demo</label>
                        <input type="text" class="form-control" id="live_demo" value="" required>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
