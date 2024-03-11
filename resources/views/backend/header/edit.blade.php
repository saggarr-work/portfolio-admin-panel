@extends('backend.master')

@section('title')
    Edit Header
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Header</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Infoes</li>
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
                <form class="row g-3" action="{{ route('update.header', ['id' => $header->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" name="fullName" class="form-control" id="fullname" value="{{ $header->fullName }}" required>
                        <span class="text-danger">{{ $errors->has('fullName') ? $errors->first('fullName') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" name="designation" class="form-control" id="designation" value="{{ $header->designation }}" required>
                        <span class="text-danger">{{ $errors->has('designation') ? $errors->first('designation') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="cv" class="form-label">Upload CV</label>
                        <input type="file" name="cv" accept="application/pdf" class="form-control" id="cv" value="">
                        <div class="col-md-12 mt-2">
                            <embed src="{{ asset($header->cv) }}" width="50px" height="50px" type="">
                        </div>
                        <span class="text-danger">{{ $errors->has('cv') ? $errors->first('cv') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="photo" class="form-label">Upload Header Photo</label>
                        <input type="file" name="photo" accept="image/*" class="form-control" id="photo" value="">
                        <div class="col-md-12  mt-2">
                            <img src="{{ asset($header->photo) }}" width="50px" height="50px" alt="header_photo">
                        </div>
                        <span class="text-danger">{{ $errors->has('photo') ? $errors->first('photo') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="githubLink" class="form-label">Github Link</label>
                        <input type="text" name="githubLink" class="form-control" id="githubLink" value="{{ $header->githubLink }}" required>
                        <span class="text-danger">{{ $errors->has('githubLink') ? $errors->first('githubLink') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="facebookLink" class="form-label">Facebook Link</label>
                        <input type="text" name="facebookLink" class="form-control" id="facebookLink" value="{{ $header->facebookLink }}" required>
                        <span class="text-danger">{{ $errors->has('facebookLink') ? $errors->first('facebookLink') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="instagramLink" class="form-label">Instagram Link</label>
                        <input type="text" name="instagramLink" class="form-control" id="instagramLink" value="{{ $header->instagramLink }}" required>
                        <span class="text-danger">{{ $errors->has('instagramLink') ? $errors->first('instagramLink') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="whatsappLink" class="form-label">Whatsapp Link</label>
                        <input type="text" name="whatsappLink" class="form-control" id="whatsappLink" value="{{ $header->whatsappLink }}" required>
                        <span class="text-danger">{{ $errors->has('whatsappLink') ? $errors->first('whatsappLink') : '' }}</span>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update Header</button>
                        <a class="btn btn-danger" href="{{ route('manage.header') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
