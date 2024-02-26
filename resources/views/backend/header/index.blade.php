@extends('backend.master')

@section('title')
    Add Header Infoes
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Header</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Header</li>
            </ol>
            <div class="row">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="validationDefault01" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="validationDefault02" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Upload CV</label>
                        <input type="file" class="form-control" id="validationDefault02" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Upload Header Photo</label>
                        <input type="file" class="form-control" id="validationDefault02" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Github Link</label>
                        <input type="text" class="form-control" id="validationDefault02" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Facebook Link</label>
                        <input type="text" class="form-control" id="validationDefault02" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Instagram Link</label>
                        <input type="text" class="form-control" id="validationDefault02" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Whatsapp Link</label>
                        <input type="text" class="form-control" id="validationDefault02" value="" required>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
