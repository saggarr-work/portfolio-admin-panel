@extends('backend.master')

@section('title')
    Edit Testimonial
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Testimonial</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Testimonial</li>
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
                <form class="row g-3" action="{{ route('update.testimonial', ['id' => $testimonial->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="avatar" class="form-label">Add Avatar</label>
                        <input type="file" name="avatar" class="form-control" id="avatar" accept="image/*">
                        <div class="col-md-12 mt-2">
                            <img src="{{ asset($testimonial->avatar) }}" height="50px" width="50px" alt="testimonial_avatar">
                        </div>
                        <span class="text-danger">{{ $errors->has('avatar') ? $errors->first('avatar') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $testimonial->name }}" required>
                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                    </div>
                    <div class="col-md-12">
                        <label for="about_description" class="form-label">Review</label>
                        <textarea class="form-control" name="review" id="summernote">{{ $testimonial->review }}</textarea>
                        <span class="text-danger">{{ $errors->has('review') ? $errors->first('review') : '' }}</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update Testimonial</button>
                        <a class="btn btn-danger" href="{{ route('manage.testimonial') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
