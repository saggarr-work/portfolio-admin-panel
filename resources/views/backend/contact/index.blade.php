@extends('backend.master')

@section('title')
    Add Contact
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Contact</li>
            </ol>
            <div class="row">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address or username</label>
                        <input type="text" class="form-control" id="email" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email_direct" class="form-label">Direct E-mail Link</label>
                        <input type="text" class="form-control" id="email_direct" value="" required>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="messenger" class="form-label">Messenger Username</label>
                        <input type="text" class="form-control" id="messenger" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="messenger_direct" class="form-label">Direct Messenger Link</label>
                        <input type="text" class="form-control" id="messenger_direct" value="" required>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="whatsapp" class="form-label">Whatsapp Username</label>
                        <input type="text" class="form-control" id="whatsapp" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="whatsapp_direct" class="form-label">Direct Whatsapp Link</label>
                        <input type="text" class="form-control" id="whatsapp_direct" value="" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
