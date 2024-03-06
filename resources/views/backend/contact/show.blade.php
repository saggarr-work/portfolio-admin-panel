@extends('backend.master')

@section('title')
    Show Contact
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Contact</li>
            </ol>
            <div class="text-success text-center">{{ Session('msg') }}</div>
            <div class="text-danger text-center">{{ Session('error') }}</div>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Showing Contact Info
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-hover">
                            <tr>
                                <th>Email Address or username: </th>
                                <td>{{ $contact->emailUsername }}</td>
                            </tr>
                            <tr>
                                <th>Direct E-mail Link: </th>
                                <td>
                                    <a href="{{ $contact->directEmailLink }}"
                                        target="blank">{{ $contact->directEmailLink }}</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Messenger Username: </th>
                                <td>{{ $contact->messengerUsername }}</td>
                            </tr>
                            <tr>
                                <th>Direct Messenger Link: </th>
                                <td>
                                    <a href="{{ $contact->directMessengerLink }}"
                                        target="blank">{{ $contact->directMessengerLink }}</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Whatsapp Username: </th>
                                <td>{{ $contact->whatsappUsername }}</td>
                            </tr>
                            <tr>
                                <th>Direct Whatsapp Link: </th>
                                <td>
                                    <a href="{{ $contact->directWhatsappLink }}"
                                        target="blank">{{ $contact->directWhatsappLink }}</a>
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('manage.contact') }}" type="button" class="btn btn-success">Go
                            Back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
