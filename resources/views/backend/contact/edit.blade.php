@extends('backend.master')

@section('title')
    Edit Contact
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Contact</li>
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
                <form class="row g-3" action="{{route('update.contact', ['id' => $contact->id])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address or username</label>
                        <input type="text" name="emailUsername" class="form-control" id="email" value="{{$contact->emailUsername}}" required>
                        <span class="text-danger">{{ $errors->has('emailUsername') ? $errors->first('emailUsername') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="email_direct" class="form-label">Direct E-mail Link</label>
                        <input type="text" name="directEmailLink" class="form-control" id="email_direct" value="{{$contact->directEmailLink}}" required>
                        <span class="text-danger">{{ $errors->has('directEmailLink') ? $errors->first('directEmailLink') : '' }}</span>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="messenger" class="form-label">Messenger Username</label>
                        <input type="text" name="messengerUsername" class="form-control" id="messenger" value="{{$contact->messengerUsername}}" required>
                        <span class="text-danger">{{ $errors->has('messengerUsername') ? $errors->first('messengerUsername') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="messenger_direct" class="form-label">Direct Messenger Link</label>
                        <input type="text" name="directMessengerLink" class="form-control" id="messenger_direct" value="{{$contact->directMessengerLink}}" required>
                        <span class="text-danger">{{ $errors->has('directMessengerLink') ? $errors->first('directMessengerLink') : '' }}</span>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="whatsapp" class="form-label">Whatsapp Username</label>
                        <input type="text" name="whatsappUsername" class="form-control" id="whatsapp" value="{{$contact->whatsappUsername}}" required>
                        <span class="text-danger">{{ $errors->has('whatsappUsername') ? $errors->first('whatsappUsername') : '' }}</span>
                    </div>
                    <div class="col-md-6">
                        <label for="whatsapp_direct" class="form-label">Direct Whatsapp Link</label>
                        <input type="text" name="directWhatsappLink" class="form-control" id="whatsapp_direct" value="{{$contact->directWhatsappLink}}" required>
                        <span class="text-danger">{{ $errors->has('directWhatsappLink') ? $errors->first('directWhatsappLink') : '' }}</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update Contact</button>
                        <a class="btn btn-danger" href="{{ route('manage.contact') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
