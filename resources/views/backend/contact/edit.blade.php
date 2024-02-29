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
            <div class="text-success">{{ Session('msg') }}</div>
            <div class="text-danger">{{ Session('error') }}</div>
            <div class="row">
                <form class="row g-3" action="{{route('update.contact', ['id' => $contact->id])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address or username</label>
                        <input type="text" name="emailUsername" class="form-control" id="email" value="{{$contact->emailUsername}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email_direct" class="form-label">Direct E-mail Link</label>
                        <input type="text" name="directEmailLink" class="form-control" id="email_direct" value="{{$contact->directEmailLink}}" required>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="messenger" class="form-label">Messenger Username</label>
                        <input type="text" name="messengerUsername" class="form-control" id="messenger" value="{{$contact->messengerUsername}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="messenger_direct" class="form-label">Direct Messenger Link</label>
                        <input type="text" name="directMessengerLink" class="form-control" id="messenger_direct" value="{{$contact->directMessengerLink}}" required>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="whatsapp" class="form-label">Whatsapp Username</label>
                        <input type="text" name="whatsappUsername" class="form-control" id="whatsapp" value="{{$contact->whatsappUsername}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="whatsapp_direct" class="form-label">Direct Whatsapp Link</label>
                        <input type="text" name="directWhatsappLink" class="form-control" id="whatsapp_direct" value="{{$contact->directWhatsappLink}}" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
