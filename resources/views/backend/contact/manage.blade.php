@extends('backend.master')

@section('title')
    Show Contact Info
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage Contact</li>
            </ol>
            <div class="text-success">{{ Session('msg') }}</div>
            <div class="text-danger">{{ Session('error') }}</div>
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header mt-2">
                        <i class="fas fa-table me-1"></i>
                        Manage data of contact info
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Sl</th>
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
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$contact->emailUsername}}</td>
                                        <td>{{$contact->directEmailLink}}</td>
                                        <td>{{$contact->messengerUsername}}</td>
                                        <td>{{$contact->directMessengerLink}}</td>
                                        <td>{{$contact->whatsappUsername}}</td>
                                        <td>{{$contact->directWhatsappLink}}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('edit.contact', ['id' => $contact->id])}}">Edit</a>
                                            <a class="btn btn-primary" href="{{route('show.contact', ['id' => $contact->id])}}">View</a>
                                            <form action="{{route('delete.contact', ['id' => $contact->id])}}" method="POST">
                                                @csrf
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
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
