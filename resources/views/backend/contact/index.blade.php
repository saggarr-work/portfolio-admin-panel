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
                <form class="row g-3" action="{{route('add.contact')}}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address or Username</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="emailUsername" class="form-control" id="email" required>
                        <span class="text-danger">{{ $errors->has('emailUsername') ? $errors->first('emailUsername') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="email_direct" class="form-label">Direct E-mail Link</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="directEmailLink" class="form-control" id="email_direct" required>
                        <span class="text-danger">{{ $errors->has('directEmailLink') ? $errors->first('directEmailLink') : '' }}</span>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="messenger" class="form-label">Messenger Username</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="messengerUsername" class="form-control" id="messenger" required>
                        <span class="text-danger">{{ $errors->has('messengerUsername') ? $errors->first('messengerUsername') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="messenger_direct" class="form-label">Direct Messenger Link</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="directMessengerLink" class="form-control" id="messenger_direct" required>
                        <span class="text-danger">{{ $errors->has('directMessengerLink') ? $errors->first('directMessengerLink') : '' }}</span>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="whatsapp" class="form-label">Whatsapp Username</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="whatsappUsername" class="form-control" id="whatsapp" required>
                        <span class="text-danger">{{ $errors->has('whatsappUsername') ? $errors->first('whatsappUsername') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="whatsapp_direct" class="form-label">Direct Whatsapp Link</label><span class="text-danger"><b> * </b></span>
                        <input type="text" name="directWhatsappLink" class="form-control" id="whatsapp_direct" required>
                        <span class="text-danger">{{ $errors->has('directWhatsappLink') ? $errors->first('directWhatsappLink') : '' }}</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Contact</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
