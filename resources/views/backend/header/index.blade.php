@extends('backend.master')

@section('title')
    Add Header
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Header/Footer</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Infoes</li>
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
                <form class="row g-3" action="{{ route('add.header') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="fullname" class="form-label">Full Name</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="fullName" class="form-control" id="fullname" required>
                        <span class="text-danger">{{ $errors->has('fullName') ? $errors->first('fullName') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="designation" class="form-label">Designation</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="designation" class="form-control" id="designation" required>
                        <span class="text-danger">{{ $errors->has('designation') ? $errors->first('designation') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="cv" class="form-label">Upload CV</label><span class="text-danger"><b> * </b></span>
                        <input type="file" name="cv" accept="application/pdf" class="form-control" id="cv" required>
                        <span class="text-danger">{{ $errors->has('cv') ? $errors->first('cv') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="photo" class="form-label">Upload Header Photo</label><span class="text-danger"><b> * </b></span>
                        <input type="file" name="photo" accept="image/*" class="form-control" id="photo" required>
                        <span class="text-danger">{{ $errors->has('photo') ? $errors->first('photo') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="githubLink" class="form-label">Github Link</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="githubLink" class="form-control" id="githubLink" required>
                        <span class="text-danger">{{ $errors->has('githubLink') ? $errors->first('githubLink') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="facebookLink" class="form-label">Facebook Link</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="facebookLink" class="form-control" id="facebookLink" required>
                        <span class="text-danger">{{ $errors->has('facebookLink') ? $errors->first('facebookLink') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="instagramLink" class="form-label">Instagram Link</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="instagramLink" class="form-control" id="instagramLink" required>
                        <span class="text-danger">{{ $errors->has('instagramLink') ? $errors->first('instagramLink') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="whatsappLink" class="form-label">Whatsapp Link</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="whatsappLink" class="form-control" id="whatsappLink" required>
                        <span class="text-danger">{{ $errors->has('whatsappLink') ? $errors->first('whatsappLink') : '' }}</span>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Header</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
