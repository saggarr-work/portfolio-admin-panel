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
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{ route('add.header') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="fullname" class="form-label">Full Name</label><span class="text-danger"><b> *
                            </b></span>
                        <input type="text" name="fullName" class="form-control" id="fullname" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="designation" class="form-label">Designation</label><span class="text-danger"><b> *
                            </b></span>
                        <input type="text" name="designation" class="form-control" id="designation" value=""
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="cv" class="form-label">Upload CV</label><span class="text-danger"><b> *
                            </b></span>
                        <input type="file" name="cv" accept="application/pdf" class="form-control" id="cv"
                            value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="photo" class="form-label">Upload Header Photo</label><span class="text-danger"><b> *
                            </b></span>
                        <input type="file" name="photo" accept="image/*" class="form-control" id="photo"
                            value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="githubLink" class="form-label">Github Link</label><span class="text-danger"><b> *
                            </b></span>
                        <input type="text" name="githubLink" class="form-control" id="githubLink" value=""
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="facebookLink" class="form-label">Facebook Link</label><span class="text-danger"><b> *
                            </b></span>
                        <input type="text" name="facebookLink" class="form-control" id="facebookLink" value=""
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="instagramLink" class="form-label">Instagram Link</label><span class="text-danger"><b> *
                            </b></span>
                        <input type="text" name="instagramLink" class="form-control" id="instagramLink" value=""
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="whatsappLink" class="form-label">Whatsapp Link</label><span class="text-danger"><b> *
                            </b></span>
                        <input type="text" name="whatsappLink" class="form-control" id="whatsappLink" value=""
                            required>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Header</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
