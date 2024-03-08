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
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{ route('add.testimonial') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="avatar" class="form-label">Add Avatar</label><span class="text-danger"><b> * </b></span>
                        <input type="file" name="avatar" class="form-control" id="avatar" accept="image/*" required>
                        <span class="text-danger">{{ $errors->has('avatar') ? $errors->first('avatar') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="name" class="form-control" id="name" required>
                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                    </div>
                    <div class="col-md-12">
                        <label for="about_description" class="form-label">Review</label><span class="text-danger"><b> * </b></span>
                        <textarea class="form-control" name="review" id="summernote"></textarea>
                        <span class="text-danger">{{ $errors->has('review') ? $errors->first('review') : '' }}</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Testimonial</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
