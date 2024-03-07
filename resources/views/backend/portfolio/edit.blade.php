@extends('backend.master')

@section('title')
    Edit Portfolio
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Portfolio</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{route('update.portfolio', ['id' => $portfolio->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="thumbnail" class="form-label">Image</label>
                        <input type="file" name="thumbnail" accept="image/*" class="form-control" id="thumbnail" value="">
                        <div class="col-md-12 mt-2">
                            <img src="{{asset($portfolio->thumbnail)}}" height="50px" width="50px" alt="portfolio_thumbnail">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="title" class="form-label">Title</label>
                        <textarea class="form-control" name="title" id="summernote" required>{{$portfolio->title}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="github_link" class="form-label">Github Link</label>
                        <input type="text" name="githubLink" class="form-control" id="github_link" value="{{$portfolio->githubLink}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="live_demo" class="form-label">Live Demo</label>
                        <input type="text" name="liveDemo" class="form-control" id="live_demo" value="{{$portfolio->liveDemo}}" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update Portfolio</button>
                        <a class="btn btn-danger" href="{{ route('manage.portfolio') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
