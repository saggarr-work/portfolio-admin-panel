@extends('backend.master')

@section('title')
    Show Contact
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage Contact</li>
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

            <div class="row mt-3">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Manage data of contact info
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Email Address</th>
                                    <th>Direct Email</th>
                                    <th>Messenger Username</th>
                                    <th>Direct Messenger</th>
                                    <th>Whatsapp Username</th>
                                    <th>Direct Whatsapp</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ substr($contact->emailUsername, 0, 5) }}...</td>
                                        <td>{{ substr($contact->directEmailLink, 0, 5) }}...</td>
                                        <td>{{ substr($contact->messengerUsername, 0, 5) }}...</td>
                                        <td>{{ substr($contact->directMessengerLink,0,5) }}...</td>
                                        <td>{{ substr($contact->whatsappUsername,0,5) }}...</td>
                                        <td>{{ substr($contact->directWhatsappLink,0,5) }}...</td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-success"
                                                    href="{{ route('edit.contact', ['id' => $contact->id]) }}">Edit</a>
                                                <a class="btn btn-primary ms-2"
                                                    href="{{ route('show.contact', ['id' => $contact->id]) }}">View</a>
                                                <form action="{{ route('delete.contact', ['id' => $contact->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="btn btn-danger ms-2"
                                                        onclick="return confirm('Delete this contact ?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
