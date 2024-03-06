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
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{ route('update.header', ['id' => $header->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" name="fullName" class="form-control" id="fullname"
                            value="{{ $header->fullName }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" name="designation" class="form-control" id="designation"
                            value="{{ $header->designation }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="cv" class="form-label">Upload CV</label>
                        <input type="file" name="cv" accept="application/pdf" class="form-control" id="cv"
                            value="">
                        <div class="col-md-12 mt-2">
                            <embed src="{{ asset($header->cv) }}" width="50px" height="50px" type="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="photo" class="form-label">Upload Header Photo</label>
                        <input type="file" name="photo" accept="image/*" class="form-control" id="photo"
                            value="">
                        <div class="col-md-12  mt-2">
                            <img src="{{ asset($header->photo) }}" width="50px" height="50px" alt="header_photo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="githubLink" class="form-label">Github Link</label>
                        <input type="text" name="githubLink" class="form-control" id="githubLink"
                            value="{{ $header->githubLink }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="facebookLink" class="form-label">Facebook Link</label>
                        <input type="text" name="facebookLink" class="form-control" id="facebookLink"
                            value="{{ $header->facebookLink }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="instagramLink" class="form-label">Instagram Link</label>
                        <input type="text" name="instagramLink" class="form-control" id="instagramLink"
                            value="{{ $header->instagramLink }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="whatsappLink" class="form-label">Whatsapp Link</label>
                        <input type="text" name="whatsappLink" class="form-control" id="whatsappLink"
                            value="{{ $header->whatsappLink }}" required>
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
